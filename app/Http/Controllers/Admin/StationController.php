<?php

namespace App\Http\Controllers\Admin;
use App\Models\State;
use App\Models\Station;
use App\Models\SurveyHeader;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBaseController as BaseController;
use Illuminate\Http\Request;

class StationController extends BaseController
{
    public function showSurveyForm(Request $request, $station_id){
        // GET THE SLUG, ex. 'posts', 'pages', etc.
        $slug = $this->getSlug($request);
        // GET THE DataType based on the slug
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();
        // Check permission
        $this->authorize('rate', app($dataType->model_name));

        $station = Station::findOrFail($station_id);
        //TODO check if user own this station

        $survey = SurveyHeader::find(1);

        return Voyager::view('voyager::stations.edit-add', [
            'dataType' => $dataType,
            'station' => $station,
            'survey' => $survey,
        ]);
    }
}