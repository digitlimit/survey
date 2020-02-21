<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InputType extends Model
{
    protected $fillable = [
        'input_type_name'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
