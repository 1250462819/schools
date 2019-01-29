<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $guarded =[];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class);
    }
//    public function teachers()
//    {
//        return $this->hasMany(Teacher::class);
//    }
    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }
}
