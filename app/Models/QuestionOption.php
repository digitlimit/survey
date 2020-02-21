<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    protected $fillable = [
        'question_id',
        'option_choice_id'
    ];

    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function option_choice(){
        return $this->hasOne(OptionChoice::class);
    }

    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
