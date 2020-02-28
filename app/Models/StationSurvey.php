<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class StationSurvey extends Model
{
    use Spatial;

    protected $fillable = [
        'station_id',
        'survey_header_id',
        'user_id'
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class, 'survey_header_id', 'survey_header_id');
    }

    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function survey_header(){
        return $this->belongsTo(SurveyHeader::class);
    }
}