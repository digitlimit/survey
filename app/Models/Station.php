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

    public function country()
    {
        return $this->hasOne(Country::class);
    }

    public function state()
    {
        return $this->hasOne(State::class);
    }

    public function survey_headers(){//organization_id
        return $this->hasMany(SurveyHeader::class);
    }
}