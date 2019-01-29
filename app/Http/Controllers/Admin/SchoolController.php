<?php

namespace App\Http\Controllers\Admin;

use App\Address;
use App\Http\Requests\SchoolRequest;
use App\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return School::find(1)->address->city   ;
        $schools=School::latest()->paginate(20);
        return view('Admin.schools.all',compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SchoolRequest $request)
    {
//         $school = new School();
//        $userpost->name = $request->name;
//        $userpost->phone = $request->phone;
//        $userpost->slug = $request->slug;
//        $userpost->save();
        School::create($request->all());
        return redirect(route('schools.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        return view('Admin.schools.edit',compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(SchoolRequest $request, School $school)
    {
//        $school->name = $request->name;
//        $school->phone = $request->phone;
//        $school->slug = $request->slug;
//        $school->save();
        $school->update($request->all());
        return redirect(route('schools.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $school->delete();
        return redirect(route('schools.index'));
    }
}
