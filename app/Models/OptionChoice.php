<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptionChoice extends Model
{
    protected $fillable = [
        'option_group_id',
        'option_choice_name',
        'weight'
    ];

    public function option_group()
    {
        return $this->hasOne(OptionGroup::class);
    }

    public function question_options(){
        return $this->hasMany(QuestionOption::class);
    }
}
