<?php

namespace uselaravel\Http\Controllers;

use Illuminate\Http\Request;

use uselaravel\Http\Requests;
use uselaravel\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct(){
    	$this->middleware('Second');
    }

     public function showPath(Request $request){
      $uri = $request->path();
      echo '<br>URI: '.$uri;
      
      $url = $request->url();
      echo '<br>';
      
      echo 'URL: '.$url;
      $method = $request->method();
      echo '<br>';
      
      echo 'Method: '.$method;
   }
}
