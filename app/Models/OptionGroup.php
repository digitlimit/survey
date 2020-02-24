<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptionGroup extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description'
    ];

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function option_choices(){
        return $this->hasMany(OptionChoice::class);
    }
}
