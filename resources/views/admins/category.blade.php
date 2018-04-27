@extends('admins.default')

@section('title', '后台管理')

@section('sidebar')
<div class="list-group side-bar" id="myList">
  <div class="card-header">Manage List</div>
  @parent
  @foreach($categories as $category)
  <li><a target="fname" class="list-group-item list-group-item-action active" href="{{ route('categories.index') }}">{{$category->name}}</a></li>
  @endforeach

</div>
@endsection


@section('content')

	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">name</th>
	      <th scope="col">description</th>
	      <th scope="col">created_ad</th>
	    </tr>
	  </thead>
	  @foreach($categories as $category)
	  <tbody>
	    <tr>
	      <th scope="row">{{ $category->id }}</th>
	      <td><a href="#">{{ $category->name }}</a></td>
	      <td>{{ $category->description }}</td>
	      <td>{{ $category->created_at }}</td>
	    </tr>

	  </tbody>
	  @endforeach
	</table>
	{{ $categories->links() }}


@stop