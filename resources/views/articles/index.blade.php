@extends('layouts.app')
@section('content')
<h1>Articles</h1>
<h2><a href="{{ url('/articles/create/') }}">Add New Articles</a></h2>
@foreach($articles as $article)
<article>
<h3>
<a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
</h3>
<div class="body">{{ $article->body}}</div>
</article>
@endforeach
@stop