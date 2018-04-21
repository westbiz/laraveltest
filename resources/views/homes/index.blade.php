@extends('app')

@section('title', '首页')

@section('content')
	<h1>home index</h1>
<div class="container-fluid" style="background: #999";>
     <div class="row">
		  <div class="col-md-4">.col-md-4</div>
		  <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
		</div>
		<div class="row">
		  <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
		  <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
		</div>
		<div class="row">
		  <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
		</div>
</div>

@stop