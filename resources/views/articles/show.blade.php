@extends('app')
@section('title', $article->title)
@section('content')
	<h1>{{ $article->title }}</h1>
	<hr>
		<article>
			<div class="body">
				{{ $article->content }}  {{ $article->published_at }}
			</div>
		</article>


@stop