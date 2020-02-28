<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'survey_header_id',
        'user_id',
        'question_option_id',
        'question_id',
        'option_choice_id',
        'unit_of_measure_id',
        'answer_numeric',
        'answer_text',
        'answer_yn',
    ];

    protected $appends = ['weight'];

    public function survey_header()
    {
        return $this->belongsTo(SurveyHeader::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function option_choice()
    {
        return $this->belongsTo(OptionChoice::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function unit_if_measure()
    {
        return $this->belongsTo(UnitOfMeasure::class);
    }

    public function getWeightAttribute()
    {
        return $this->option_choice->weight;
    }
}
