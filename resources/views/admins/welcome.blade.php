@extends('admins.default')

@section('title', '后台管理')

@section('sidebar')
    @include('admins.leftmenu')

@endsection

@section('content')

	<div class="jumbotron">
		<h1 class="display-3">Welcome Back!</h1>
		<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
		<hr class="m-y-md">
		<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
		<p class="lead">
		<a class="btn btn-primary btn-lg" href="#" role="button">See more</a>
		</p>
	</div>

@stop