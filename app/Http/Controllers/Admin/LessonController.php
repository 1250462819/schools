<?php

namespace App\Http\Controllers\Admin;

use App\Classroom;
use App\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($class,$name)
    {
        $lessons=Lesson::all()->where( 'classroom.name','=',$class)
                                ->where('classroom.school_id','=',$name);
        return view('Admin.lesson.all',compact('lessons','class','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($class,$name)
    {
        return view('Admin.lesson.create',compact('name','class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lesson::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit($class,$name,Lesson $lesson)
    {
        return view('Admin.lesson.edit',compact('class','name','lesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update($class,$name,Request $request, Lesson $lesson)
    {
        $lesson->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy($class,$name,Lesson $lesson)
    {
        $lesson ->delete();
        return back();
    }
}
