<?php

namespace App\Actions;

use App\Models\StationSurvey;
use App\Models\StationSurveyAnswer;
use TCG\Voyager\Actions\AbstractAction;

class DeleteRate extends AbstractAction
{
    public function getTitle()
    {
        return 'Delete Rate';
    }

    public function getIcon()
    {
        return 'fa fa-remove-circle';
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
        return $station_survey ? 'rated' : 'raterrrrrrrrrrrrrrrrrrrrrrr';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-default pull-right',
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.stations.rate', ['id' => $this->data->id]);
    }
}