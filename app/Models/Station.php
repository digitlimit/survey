<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class Station extends Model
{
    use Spatial;

    protected $fillable = [
        'organization_id',
        'country_id',
        'state_id',
        'name',
        'address',
        'phone',
        'email',
        'lga',
        'lng',
        'lat'
    ];


    public function station_survey_answers()
    {
        return $this->hasMany(StationSurveyAnswer::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function station_survey()
    {
        return $this->hasOne(StationSurvey::class);
    }

    public function survey_header(){//organization_id
        return $this->belongsTo(SurveyHeader::class);
    }
}