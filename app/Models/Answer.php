<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'user_id',
        'question_option_id',
        'answer_numeric',
        'answer_text',
        'answer_yn',
        'unit_of_measure_id'
    ];

    public function question_option()
    {
        return $this->belongsTo(QuestionOption::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function unit_if_measure()
    {
        return $this->belongsTo(UnitOfMeasure::class);
    }
}
