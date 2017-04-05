<?php

namespace uselaravel\Http\Controllers;

use Illuminate\Http\Request;

use uselaravel\Http\Requests;

use DB;

use uselaravel\Http\Controllers\Controller;

class StudViewController extends Controller
{
    public function index(){
    	$users = DB::select('select * from student');
    	return view('stud_view',['users'=>$users]);
    }
}
