<?php

namespace App\Http\Controllers\Home;

use App\Address;
use App\Classroom;
use App\Post;
use App\School;
use App\Slider;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index($name){

        $sliders=Slider::all()->where('school.name','=',$name);
        $posts=Post::all()->where('school.name','=',$name);
        return view('Home.school',compact('name','sliders','posts'));
    }

    public function classroom($name){
        $classrooms=Classroom::all()->where('school.name','=',$name);
        return view('Home.classroom',compact('name','classrooms'));
    }
    public function student($name){
        $students=Student::all()->where('school.name','=',$name);
        return view('Home.student',compact('name','students'));
    }
    public function teacher($name)
    {
        $teachers = Teacher::all()->where('school.name', '=', $name);
        return view('Home.teacher', compact('name', 'teachers'));
    }
    public function about($name){
        $results =DB::select('SELECT c.name as classroom_name,u.name as teacher_name ,u.*,s.name as school_name, t.*,l.*,lt.* FROM lesson_teacher as lt
        INNER JOIN teachers as t ON lt.teacher_id = t.id
        INNER JOIN lessons  as l ON lt.lesson_id = l.id
        INNER JOIN users as u on t.user_id = u.id
        INNER JOIN schools as s on s.id=t.school_id
        INNER JOIN classrooms as c on c.id=l.classroom_id
        where s.name =?',[$name]);




        $teachers=Teacher::all()->where('school.name','=',$name);
        $schools=School::all()->where('name','=',$name);
        $addresses=Address::all()->where('school.name','=',$name);
        $sliders=Slider::all()->where('school.name','=',$name);
        return view('Home.about',compact('name','sliders','addresses','schools','teachers','results'));
    }
    public function contact($name){
        $sliders=Slider::all()->where('school.name','=',$name);
        return view('Home.contact',compact('name','sliders'));
    }
    public function gallery($name){
        $sliders=Slider::all()->where('school.name','=',$name);
        return view('Home.gallery',compact('name','sliders'));
    }
}
