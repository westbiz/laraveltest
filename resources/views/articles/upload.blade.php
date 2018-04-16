@extends('app')
@section('content')
	<h1>撰写新文章</h1>
	{!! Form::open() !!}
		<div>
			{!! Form::label('image', '图片:')!!}
			{!! Form::file('image', $attributes=[], ['class'=>'form-control']) !!}
		</div>
		{!! Form::submit('确认上传', ['class'=>'btn btn-primary form-control']) !!}

	{!! Form::close() !!}

	@include('errors.list')

@stop