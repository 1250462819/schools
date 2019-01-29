<?php

namespace App\Http\Controllers\Admin;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class classroom_teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {

       $results = DB::select('SELECT s.name as school_name,u.name as teacher_name ,u.*, t.*,c.*,ct.* FROM classroom_teacher as ct
        INNER JOIN teachers as t ON ct.teacher_id = t.id
        INNER JOIN classrooms  as c ON ct.classroom_id = c.id
        INNER JOIN users as u on t.user_id = u.id
        INNER JOIN schools as s on s.id=c.school_id     
        where s.name =?',[$name]);
       //$teachers=Teacher::all()->where( 'school.name','=',$name);
       // return $results;
        return view('Admin.classroom_teacher.all',compact('results','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($name)
    {
        return view('Admin.classroom_teacher.create',compact('name'));
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
    public function edit($name,$id)
    {
        return view('Admin.classroom_teacher.edit',compact('name','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        //DB::update('update classroom_teacher set  classroom_id = $request->classroom_id ,teacher_id= $request->teacher_id where id = ?', [$id]);
        DB::table('classroom_teacher')->where('id','=', $id)->update(['classroom_id'=>$request->classroom_id ,'teacher_id'=>$request->teacher_id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($name,$id)
    {
        DB::delete('delete from classroom_teacher where id =?',[$id]);
    }
}
