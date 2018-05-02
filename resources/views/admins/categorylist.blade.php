@extends('admins.default')

@section('title', 'TX管理系统')

@section('sidebar')

	@include('admins.leftmenu')

@endsection

@section('bread')
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item">
	    	<a href="/admin">Home</a>
	    </li>
	    <li class="breadcrumb-item">
	    	<a href="/admin/categories">categories</a>
	    </li>
	    <li class="breadcrumb-item active" aria-current="page">categories</li>
	  </ol>
	</nav>
@stop

@section('content')
	<h3>分类列表</h3>
	<hr class="aez">
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">name</th>
	      <th scope="col">parent_id</th>
	      <th scope="col">url</th>
	      <th scope="col">description</th>
	      <th scope="col">created_ad</th>
	      <th scope="col">操作</th>
	    </tr>
	  </thead>
	  @foreach($categories as $category)
	  <tbody>
	    <tr>
	      <th scope="row">{{ $category->id }}</th>
	      <td><a href="#">{{ $category->name }}</a></td>
	      <td><a href="#">{{ $category->parent_id }}</a></td>
	      <td><a href="#">{{ $category->url }}</a></td>
	      <td>{{ $category->description }}</td>
	      <td>{{ $category->created_at }}</td>
	      <td>
	      	<div class="btn-group btn-group-sm">
	      		<a href="{{ url('admin/categories/'.$category->id.'/edit') }}">edit</a>
	      		<a type="button" class="btn btn-light  btn-sm">del</a>
	      	</div>
	      </td>
	    </tr>
	  </tbody>
	  @endforeach
	</table>
	{{ $categories->links() }}


@stop