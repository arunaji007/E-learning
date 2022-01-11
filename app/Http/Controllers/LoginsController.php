<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;f

class LoginsController extends Controller
{
    //
    public function index(){
        $name = 'Arun';
        //one return method
        //return view('login',compact('name'));
        return view('login')->with('name',$name);
    }
}
