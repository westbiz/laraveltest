@extends('app')
@section('content')
	<h1>{{ $article->title }}</h1>
	{!! Form::model($article, ['method'=>'PATCH', 'url'=>'/articles/'.$article->id]) !!}
		<div class="form-group">
			{!! Form::label('title', 'Title:')!!}
			{!! Form::text('title', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content','Content:')!!}
			{!! Form::textarea('content', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('published_at', 'Published_at:')!!}
			{!! Form::input('date','published_at', $article->published_at->format('Y-m-d'), ['class'=>'form-control']) !!}
		</div>
		{!! Form::submit('发表文章', ['class'=>'btn btn-primary form-control']) !!}

	{!! Form::close() !!}

	@include('errors.list')

@stop