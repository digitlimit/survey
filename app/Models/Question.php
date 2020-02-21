<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'parent_id',
        'survey_section_id',
        'input_type_id',
        'question_name',
        'question_subtext',
        'question_required_yn',
        'answer_required_yn',
        'option_group_id',
        'allow_mutiple_option_answers_yn',
        'dependent_question_id',
        'dependent_question_option_id',
        'dependent_answer_id',
    ];

    public function parent()
    {
        return $this->hasOne(Question::class, 'parent_id');
    }

    public function input_type()
    {
        return $this->hasOne(InputType::class);
    }

    public function option_group()
    {
        return $this->hasOne(OptionGroup::class);
    }

    public function question_options()
    {
        return $this->hasMany(QuestionOption::class);
    }

    public function survey_section()
    {
        return $this->hasOne(QuestionOption::class);
    }
}
