<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class Organization extends Model
{
    use Spatial;

    protected $fillable = [
        'country_id',
        'state_id',
        'name',
        'address_1',
        'address_2',
        'address_3',
        'phone_1',
        'phone_2',
        'phone_3',
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