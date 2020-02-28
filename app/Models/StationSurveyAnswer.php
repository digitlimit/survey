<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class StationSurveyAnswer extends Model
{
    use Spatial;

    protected $fillable = [
        'station_id',
        'survey_header_id',
        'question_id',
        'option_choice_id',
        'user_id',
    ];

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