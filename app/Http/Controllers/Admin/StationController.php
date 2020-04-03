<?php

namespace App\Http\Controllers\Admin;
use App\Models\Answer;
use App\Models\QuestionOption;
use App\Models\State;
use App\Models\Station;
use App\Models\StationSurvey;
use App\Models\StationSurveyAnswer;
use App\Models\SurveyHeader;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Events\BreadAdded;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBaseController as BaseController;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Events\BreadDataRestored;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadImagesDeleted;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use App\Helpers\Chart;

class StationController extends BaseController
{
    public function showSurveyForm(Request $request, $station_id)
    {
        $user =  $request->user();
        $survey = SurveyHeader::find(1); //TODO Hard coded fix

        $station_survey = StationSurveyAnswer::where([
            'station_id' => $station_id,
            'survey_header_id' => $survey->id, //TODO fix
//            'user_id' => $user->id
        ])->first();

        if($station_survey){
            return redirect()->route('voyager.stations.index')
                ->with(['message'    => __('station.already_rated'), 'alert-type' => 'error']);
        }

        // GET THE SLUG, ex. 'posts', 'pages', etc.
        $slug = $this->getSlug($request);
        // GET THE DataType based on the slug
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();
        // Check permission
        $this->authorize('rate', app($dataType->model_name));

        $station = Station::findOrFail($station_id);
        //TODO check if user own this station

        $survey = SurveyHeader::find(1); //TODO Hard coded

        return Voyager::view('voyager::stations.rate', [
            'dataType' => $dataType,
            'station' => $station,
            'survey' => $survey
        ]);
    }

    public function storeSurveyForm(Request $request, $station_id)
    {
//        dd($request->all());
        //TODO check if user already taken this survey
        //TODO check if survey belongs to user organisation

        try{
            $user =  $request->user();
            $answers = [];
            $station = Station::findOrFail($station_id);

            //check if already completed survey
            $station_survey = StationSurveyAnswer::where([
                'station_id' => $station_id,
                'survey_header_id' => $request->survey,
//                'user_id' => $user->id
            ])->first();

            if($station_survey){
                return redirect()->route('voyager.stations.index')
                    ->with(['message'    => __('station.already_rated'), 'alert-type' => 'error']);
            }

            $survey = SurveyHeader::findOrFail($request->survey);

            //TODO we assume its not multiple answers to one question
            //TODO validate based on each question input type
            //TODO ensure question exists and belongs to current survey
            //TODO check if user already completed this

            $station_survey_answers = [];

            foreach($request->answers as $question_id => $option_choice_id){
                $answers[] = [
                    'user_id' => $user->id,
                    'question_id' => $question_id,
                    'option_choice_id' =>$option_choice_id
                ];

                $station_survey_answers[] = [
                    'station_id' => $station_id,
                    'survey_header_id' => $survey->id,
                    'question_id' => $question_id,
                    'option_choice_id' => $option_choice_id,
                    'user_id' => $user->id,
                ];
            }



            if(count($answers))
            {
                //create TODO
                $station_answers = $station->station_survey_answers()->createMany($station_survey_answers);

                //survey TODO
                $survey_answer = $survey->answers()->createMany($answers);

                if($survey_answer)
                {
                    StationSurvey::create([
                        'station_id' => $station->id,
                        'survey_header_id' => $request->survey,
                        'user_id' => $user->id
                    ]);

                    return redirect()->route('voyager.stations.index')
                        ->with(['message'    => __('station.rate_saved'), 'alert-type' => 'success']);
                }
            }else{
                return redirect()->route('voyager.stations.index')
                    ->with(['message' => __('station.rate_not_saved'), 'alert-type' => 'error']);
            }

        }catch(\Exception $e){
            return redirect()->route('voyager.stations.index')
                ->with(['message' => $e->getMessage(), 'alert-type' => 'error']);
        }
    }

    public function showSurveyAnswers(Request $request, $station_id)
    {
        $slug = 'station-survey-answers';

        // GET THE DataType based on the slug
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('browse', app($dataType->model_name));

        $getter = $dataType->server_side ? 'paginate' : 'get';

        $search = (object) ['value' => $request->get('s'), 'key' => $request->get('key'), 'filter' => $request->get('filter')];

        $searchNames = [];
        if ($dataType->server_side) {
            $searchable = SchemaManager::describeTable(app($dataType->model_name)->getTable())->pluck('name')->toArray();
            $dataRow = Voyager::model('DataRow')->whereDataTypeId($dataType->id)->get();
            foreach ($searchable as $key => $value) {
                $displayName = $dataRow->where('field', $value)->first()->getTranslatedAttribute('display_name');
                $searchNames[$value] = $displayName ?: ucwords(str_replace('_', ' ', $value));
            }
        }

        $orderBy = $request->get('order_by', $dataType->order_column);
        $sortOrder = $request->get('sort_order', null);
        $usesSoftDeletes = false;
        $showSoftDeleted = false;

        // Next Get or Paginate the actual content from the MODEL that corresponds to the slug DataType
        if (strlen($dataType->model_name) != 0) {
            $model = app($dataType->model_name);

            if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope'.ucfirst($dataType->scope))) {
                $query = $model->{$dataType->scope}();
            } else {
                $query = $model::select('*');
            }

            // Use withTrashed() if model uses SoftDeletes and if toggle is selected
            if ($model && in_array(SoftDeletes::class, class_uses_recursive($model)) && Auth::user()->can('delete', app($dataType->model_name))) {
                $usesSoftDeletes = true;

                if ($request->get('showSoftDeleted')) {
                    $showSoftDeleted = true;
                    $query = $query->withTrashed();
                }
            }

            // If a column has a relationship associated with it, we do not want to show that field
            $this->removeRelationshipField($dataType, 'browse');

            if ($search->value != '' && $search->key && $search->filter) {
                $search_filter = ($search->filter == 'equals') ? '=' : 'LIKE';
                $search_value = ($search->filter == 'equals') ? $search->value : '%'.$search->value.'%';
                $query->where($search->key, $search_filter, $search_value);
            }

            if ($orderBy && in_array($orderBy, $dataType->fields())) {
                $querySortOrder = (!empty($sortOrder)) ? $sortOrder : 'desc';
                $dataTypeContent = call_user_func([
                    $query->orderBy($orderBy, $querySortOrder),
                    $getter,
                ]);
            } elseif ($model->timestamps) {
                $dataTypeContent = call_user_func([$query->latest($model::CREATED_AT), $getter]);
            } else {
                $dataTypeContent = call_user_func([$query->orderBy($model->getKeyName(), 'DESC'), $getter]);
            }

            // Replace relationships' keys for labels and create READ links if a slug is provided.
            $dataTypeContent = $this->resolveRelations($dataTypeContent, $dataType);
        } else {
            // If Model doesn't exist, get data from table name
            $dataTypeContent = call_user_func([DB::table($dataType->name), $getter]);
            $model = false;
        }

        // Check if BREAD is Translatable
        if (($isModelTranslatable = is_bread_translatable($model))) {
            $dataTypeContent->load('translations');
        }

        // Check if server side pagination is enabled
        $isServerSide = isset($dataType->server_side) && $dataType->server_side;

        // Check if a default search key is set
        $defaultSearchKey = $dataType->default_search_key ?? null;

        // Actions
        $actions = [];
        if (!empty($dataTypeContent->first())) {
            foreach (Voyager::actions() as $action) {
                $action = new $action($dataType, $dataTypeContent->first());

                if ($action->shouldActionDisplayOnDataType()) {
                    $actions[] = $action;
                }
            }
        }

        // Define showCheckboxColumn
        $showCheckboxColumn = false;
        if (Auth::user()->can('delete', app($dataType->model_name))) {
            $showCheckboxColumn = true;
        } else {
            foreach ($actions as $action) {
                if (method_exists($action, 'massAction')) {
                    $showCheckboxColumn = true;
                }
            }
        }

        // Define orderColumn
        $orderColumn = [];
        if ($orderBy) {
            $index = $dataType->browseRows->where('field', $orderBy)->keys()->first() + ($showCheckboxColumn ? 1 : 0);
            $orderColumn = [[$index, 'desc']];
            if (!$sortOrder && isset($dataType->order_direction)) {
                $sortOrder = $dataType->order_direction;
                $orderColumn = [[$index, $dataType->order_direction]];
            } else {
                $orderColumn = [[$index, 'desc']];
            }
        }

        $view = 'voyager::bread.browse';

        if (view()->exists("voyager::$slug.browse")) {
            $view = "voyager::$slug.browse";
        }

        return Voyager::view($view, compact(
            'actions',
            'dataType',
            'dataTypeContent',
            'isModelTranslatable',
            'search',
            'orderBy',
            'orderColumn',
            'sortOrder',
            'searchNames',
            'isServerSide',
            'defaultSearchKey',
            'usesSoftDeletes',
            'showSoftDeleted',
            'showCheckboxColumn'
        ));
    }

    public function generateAnalysis(Request $request)
    {
        $chart = Chart::data();

        return response()->json([
            'data' => $chart
        ]);
    }
}