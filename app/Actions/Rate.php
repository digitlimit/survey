<?php

namespace App\Actions;

use App\Models\StationSurvey;
use App\Models\StationSurveyAnswer;
use TCG\Voyager\Actions\AbstractAction;

class Rate extends AbstractAction
{
    public function getTitle()
    {
        return 'Rate';
    }

    public function getIcon()
    {
        return 'fa fa-check-square-o';
    }

    public function getPolicy()
    {
        $station_survey = StationSurveyAnswer::where([
            'station_id' => $this->data->id,
            'survey_header_id' => 1, //TODO fix
//            'user_id' => auth()->user()->id //this ensure two users can survey same station twice
        ])->count();

        //TODO rated does not exists as policy , I'm ust using it to hide button
        //when user already rated station
        return $station_survey ? 'rated' : 'rate';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right',
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.stations.rate', ['id' => $this->data->id]);
    }
}