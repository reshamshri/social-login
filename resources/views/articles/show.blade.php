@extends('app')
@section('content')
<h2>
{{ $article->title }}
</h2>
<div class="body">{{ $article->body}}</div>
@stop