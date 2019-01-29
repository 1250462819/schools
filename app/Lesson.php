<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded =[];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }

}
