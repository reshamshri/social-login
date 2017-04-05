<?php

namespace uselaravel\Http\Controllers;

use Illuminate\Http\Request;

use uselaravel\Http\Requests;
use uselaravel\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index(){
      echo "<br>Test Controller.";
   }
}
