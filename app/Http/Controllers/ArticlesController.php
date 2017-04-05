<?php

namespace uselaravel\Http\Controllers;
//use Request;
use uselaravel\Http\Requests;
use uselaravel\Article;
use Carbon\Carbon;

class ArticlesController extends Controller
{

	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
	public function index(){
	    $articles = Article::latest('published_at')->published()->get();
		return view('articles.index',compact('articles'));
	} 

	public function show($id){
		$article = Article::findorFail($id);
		return view('articles.show',compact('article'));
	}
	public function create(){
		return view('articles.create');
	}

	public function store(Requests\CreateArticleRequest $request){
		
		$file = $request->file('media');
		$destinationPath = env('APP_STORAGE');
      	$file->move($destinationPath,$file->getClientOriginalName());

		Article::create($request->all());
		return redirect('articles');
	}
}
