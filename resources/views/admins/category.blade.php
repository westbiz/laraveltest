@extends('admins.default')

@section('title', '后台管理')

@section('sidebar')
	@include('admins.leftmenu')
{{-- <div class="list-group side-bar" id="myList">
  <div class="card-header">Manage List</div>
  <div class="list-group side-bar" id="myList" role="tablist">
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#home" role="tab">
          <i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#categories" role="tab">
          <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; 分类管理</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#members" role="tab">
          <i class="fa fa-user-o" aria-hidden="true"></i>&nbsp; 会员管理</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#products" role="tab">
          <i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; 产品管理</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#advertises" role="tab">
          <i class="fa fa-flag" aria-hidden="true"></i>&nbsp; 广告管理</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#schedule" role="tab">
          <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; 日程管理</a>
         <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">
          <i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; 系统设置</a>
      </div>

</div> --}}
@endsection


@section('content')

	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">name</th>
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
	      <td>{{ $category->description }}</td>
	      <td>{{ $category->created_at }}</td>
	      <td><input type="button" value="edit"></td>
	    </tr>

	  </tbody>
	  @endforeach
	</table>
	{{ $categories->links() }}


@stop