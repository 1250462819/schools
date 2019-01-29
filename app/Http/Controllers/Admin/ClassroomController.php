<?php

namespace App\Http\Controllers\Admin;

use App\Classroom;
use App\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function index($name)
    public function index($name)
    {
 //       $schools= School::all()->where('name','=', $name);
//        foreach ($schools as $school):
//            return $school->name;
//            endforeach;
        //$classrooms=Classroom::latest()->paginate(20);
        $classrooms=Classroom::all()->where( 'school.name','=',$name);
        return view('Admin.classroom.all',compact('classrooms','name'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($name)
    {
        return view('Admin.classroom.create',compact('name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Classroom::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit($name,Classroom $classroom)
    {
        return view('Admin.classroom.edit',compact('name','classroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update($name ,Request $request, Classroom $classroom)
    {
        $classroom->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    //public function destroy($id,$name,Classroom $classroom)
    public function destroy($name,Classroom $classroom)
    {

        $classroom ->delete();
        return back();
    }


}
