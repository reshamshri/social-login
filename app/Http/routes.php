<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('role',['middleware'=> 'Role:editor','uses'=>'TestController@index',]);
Route::get('terminate',['middleware'=> 'Terminate','uses'=>'ABCController@index',]);
Route::get('profile',['middleware' => 'auth','uses' => 'UserController@showProfile']);
Route::get('/usercontroller/path',['middleware' => 'First','uses' => 'UserController@showPath']);
Route::resource('my','MyController');

class MyClass{
   public $foo = 'bar';
}
Route::get('/myclass','ImplicitController@index');

Route::get('/register',function(){
   return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');

Route::get('/header',function(){
   return response("Hello", 200)->header('Content-Type', 'text/html');
});


Route::get('/cookie',function(){
   return response("Hello", 200)->header('Content-Type', 'text/html')
      ->withcookie('name','Virat Gandhi');
});

Route::get('json',function(){
   return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});

Route::get('blade',function(){
	return view('page',array('name'=>'Resham'));
});

Route::get('/test', ['as'=>'testing',function(){
   return response("Helloasas", 200)->header('Content-Type', 'text/html');
}]);


Route::get('redirect',function(){
   return redirect()->route('testing');
});

Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');

Route::get('view-records','StudViewController@index');

Route::get('/form',function(){
   return view('form');
});

Route::get('articles','ArticlesController@index');
Route::get('articles/create','ArticlesController@create');
Route::get('articles/{id}','ArticlesController@show');
Route::post('articles','ArticlesController@store');

Route::auth();

Route::get('/home', 'HomeController@index');
