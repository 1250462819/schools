<?php

namespace App\Http\Controllers\Home;

use App\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index($name){
        $addresses=Address::all()->where('school.name','=',$name);
        return view('Home.school',compact('name'));
    }
}
