<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class School extends Model
{
    use Sluggable;

    protected $guarded =[];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function path(){
        return "/school/$this->slug";
    }


    public function address()
    {
        return $this->hasOne(Address::class);
    }
    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }

}
