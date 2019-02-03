<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
