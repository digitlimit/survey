<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSurveySection extends Model
{
    protected $fillable = [
        'survey_section_id',
        'survey_header_id',
        'section_name',
        'section_title',
        'section_subheading',
        'section_required_yn'
    ];

    public function survey_sections()
    {
        return $this->hasOne(SurveySection::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
