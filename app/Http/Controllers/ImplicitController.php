<?php

namespace uselaravel\Http\Controllers;

use Illuminate\Http\Request;

use uselaravel\Http\Requests;

use uselaravel\Http\Controllers\Controller;

class ImplicitController extends Controller
{
    private $myclass;
   
   public function __construct(\MyClass $myclass){
      $this->myclass = $myclass;
   }
   public function index(){
      dd($this->myclass);
   }
}
