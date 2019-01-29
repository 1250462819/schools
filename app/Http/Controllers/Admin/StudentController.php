<?php

namespace App\Http\Controllers\Admin;

use App\Classroom;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($class,$name)
    {
//        $students=Student::find(1);
//        return $students;

        $students=Student::all()->where( 'classroom.name','=',$class)
            ->where('classroom.school_id','=',$name);
        return view('Admin.student.all',compact('students','class','name'));




//        $students=Student::all()->where( 'classroom.name','=',$class)
//            ->where('classroom.school_id','=',$name);
//        foreach ($students as $student){
//            //print($student);
//            return $student->classroom;
//        }






    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($class,$name)
    {
        return view('Admin.student.create',compact('name','class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($class,$name,Student $student)
    {
        //return view('Admin.student.edit',compact('class','name','student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update($class,$name,Request $request, Student $student)
    {
//        $student->update($request->all());
//        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($class,$name,Student $student)
    {
        $student->delete();
        return back();
    }
}
