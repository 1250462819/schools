<?php

namespace App\Http\Controllers\Home;

use App\Address;
use App\Classroom;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index($name){
        $addresses=Address::all()->where('school.name','=',$name);
    
        return view('Home.school',compact('name','addresses'));
    }
    public function classroom($name){
        $classrooms=Classroom::all()->where('school.name','=',$name);
        return view('Home.classroom',compact('name','classrooms'));
    }
    public function student($name){
        $students=Student::all()->where('school.name','=',$name);
        return view('Home.student',compact('name','students'));
    }
    public function teacher($name){
        $teachers=Teacher::all()->where('school.name','=',$name);
        return view('Home.teacher',compact('name','teachers'));
    }
}
