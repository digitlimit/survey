<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveySection extends Model
{
    protected $fillable = [
        'survey_section_id',
        'survey_header_id',
        'section_name',
        'section_title',
        'section_subheading',
        'section_required_yn'
    ];

    public function user_survey_sections(){
        return $this->hasMany(UserSurveySection::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function survey_header(){
        return $this->belongsTo(SurveyHeader::class);
    }

    //sub sections
    public function sections(){
        return $this->hasMany(SurveySection::class, 'survey_section_id');
    }
}
