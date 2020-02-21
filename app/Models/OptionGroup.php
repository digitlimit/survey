<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptionGroup extends Model
{
    protected $fillable = [
        'option_group_name'
    ];

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function option_choice(){
        return $this->hasOne(OptionChoice::class);
    }
}
