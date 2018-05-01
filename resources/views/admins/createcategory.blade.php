@extends('admins.default')

@section('title', 'TX管理系统')

@section('sidebar')

	@include('admins.leftmenu')

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
		@include('admins.categoryform')

	{!! Form::close() !!}

@stop