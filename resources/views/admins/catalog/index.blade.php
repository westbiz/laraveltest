@extends('admins.default')

@section('title', '栏目列表')

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
	<h3>栏目列表</h3>
	<hr class="aez">
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">name</th>
	      <th scope="col">display</th>
	      <th scope="col">url</th>
	      <th scope="col">description</th>
	      <th scope="col">created_ad</th>
	      <th scope="col">操作</th>
	    </tr>
	  </thead>
	  @foreach($catalogs as $catalog)
	  <tbody>
	    <tr>
	      <th scope="row">{{ $catalog->id }}</th>
	      <td><a href="#">{{ $catalog->name }}</a></td>
	      <td><a href="#">{{ $catalog->display }}</a></td>
	      <td><a href="#">{{ $catalog->url }}</a></td>
	      <td>{{ $catalog->description }}</td>
	      <td>{{ $catalog->created_at }}</td>
	      <td>
	      	<div class="btn-group btn-group-sm">
	      		<a href="{{ url('admin/catalogs/'.$catalog->id.'/edit') }}">edit</a>
	      		<a type="button" class="btn btn-light  btn-sm">del</a>
	      	</div>
	      </td>
	    </tr>
	  </tbody>
	  @endforeach
	</table>



@endsection