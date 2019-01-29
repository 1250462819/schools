<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class lesson_teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $results =DB::select('SELECT c.name as classroom_name,u.name as teacher_name ,u.*,s.name as school_name, t.*,l.*,lt.* FROM lesson_teacher as lt
        INNER JOIN teachers as t ON lt.teacher_id = t.id
        INNER JOIN lessons  as l ON lt.lesson_id = l.id
        INNER JOIN users as u on t.user_id = u.id
        INNER JOIN schools as s on s.id=t.school_id
        INNER JOIN classrooms as c on c.id=l.classroom_id
        where s.name =?',[$name]);
        //$teachers=Teacher::all()->where( 'school.name','=',$name);
        //return $results;
        return view('Admin.lesson_teacher.all',compact('results','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($name)
    {
        return view('Admin.lesson_teacher.create',compact('name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert('insert into lesson_teacher ( lesson_id ,teacher_id 	) values (?, ?)', [$request->lesson_id, $request->teacher_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($name,$id)
    {
        DB::delete('delete from lesson_teacher where id =?',[$id]);
    }
}
