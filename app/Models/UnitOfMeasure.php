<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitOfMeasure extends Model
{
    protected $fillable = [
        'unit_of_measures_name'
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
