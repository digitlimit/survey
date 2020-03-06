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
}