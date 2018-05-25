@extends('admins.default')

@section('title', '新增分类')

@section('sidebar')

	{{-- @include('admins.leftmenu') --}}

@endsection


@section('content')
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="#">Home</a></li>
	    <li class="breadcrumb-item"><a href="#">Library</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Data</li>
	  </ol>
	</nav>
	<h3>创建分类</h3>
	<hr class="aez">
	{!! Form::open(['url'=>'/admin/categories']) !!}
		<div class="form-group">
			{!! Form::label('parent_id','上级分类: ')!!}
			{!! Form::select('parent_id', $parents, null, ['class' => 'input-sm form-control', 'placeholder' => '请选择一个分类']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('title', '分类名称: ')!!}
			{!! Form::text('title', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('description','描述: ')!!}
			{!! Form::textarea('description', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('url','Url:')!!}
			{!! Form::text('url', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-check">
			{!! Form::hidden('display', '0', false, ['class'=>'form-check-input']) !!}
			{!! Form::checkbox('display', '1', true, ['class'=>'form-check-input']) !!}
			{!! Form::label('display','是否显示', ['class'=>'form-check-label'])!!}
		</div>


		{!! Form::submit('提交', ['class'=>'btn btn-primary form-control']) !!}

	{!! Form::close() !!}

		@include('errors.list')

@stop