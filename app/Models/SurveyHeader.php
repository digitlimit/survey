<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyHeader extends Model
{
    protected $fillable = [
        'organization_id',
        'survey_name',
        'instructions',
        'other_header_info'
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function survey_sections()
    {
        return $this->hasMany(SurveySection::class);
    }

    public function survey_comments()
    {
        return $this->hasMany(SurveyComment::class);
    }
}
