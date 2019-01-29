<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded =[];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function school()
    {
        return $this->belongsTo(School::class);
    }
//    public function classroom()
//    {
//        return $this->belongsTo(Classroom::class);
//    }
    public function classrooms(){
        return $this->belongsToMany(Classroom::class);
    }
    public function lessons(){
        return $this->belongsToMany(Lesson::class);
    }

}
