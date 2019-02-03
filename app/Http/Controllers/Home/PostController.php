<?php

namespace App\Http\Controllers\Home;

use App\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index($name){
        $addresses=Address::all()->where('school.name','=',$name);
    
        return view('Home.school',compact('name','addresses'));
    }
    public function about($name){
    
        return view('Home.about',compact('name'));
    }
    public function contact($name){
    
        return view('Home.contact',compact('name'));
    }
    public function gallery($name){
    
        return view('Home.gallery',compact('name'));
    }
}
