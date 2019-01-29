<?php

namespace App\Http\Controllers\Admin;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($class,$name)
    {
        $results = DB::select('SELECT s.name as school_name ,s.id as school_id , t.*,t.name as teacher_name,c.*,ct.* FROM teachers as t
        INNER JOIN classroom_teacher as ct ON ct.teacher_id = t.id
        INNER JOIN classrooms  as c ON ct.classroom_id = c.id
        INNER JOIN schools as s on s.id=c.school_id
        where s.id =? AND c.name=?',[$name,$class]);

        //return $results;
        //$teachers=Teacher::all()->where('school_id','=',$name);


        return view('Admin.teacher.all',compact('results','class','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($class,$name)
    {
        return view('Admin.teacher.create',compact('name','class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert('insert into classroom_teacher ( classroom_id ,teacher_id 	) values (?, ?)', [$request->classroom_id, $request->teacher_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($class,$name,Teacher $teacher)
    {
       // return view('Admin.teacher.edit',compact('class','name','teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update($class,$name,Request $request, Teacher $teacher)
    {
//        $teacher->update($request->all());
//        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($class,$name,Teacher $teacher)
    {
//        $teacher->delete();
//        return back();
    }
}
