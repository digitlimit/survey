<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyComment extends Model
{
    protected $fillable = [
        'survey_header_id',
        'user_id',
        'comments'
    ];

    public function survey_header(){
        return $this->belongsTo(SurveyHeader::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
