
<div class="list-group side-bar" id="myList">
  <div class="card-header">Manage List</div>
  @foreach($categories as $category)
  <li><a target="fname" class="list-group-item list-group-item-action active" href="{{ route('categories.index') }}">{{$category->name}}</a></li>
  @endforeach

</div>

<div class="col-md-3">
    @section('leftmenu')
        <div class="list-group">
            <a href="{{url('student/index')}}" class="list-group-item
            {{Request::getPathInfo()!='/student/create'?'active':''}}
                    ">学生列表</a>
            <a href="{{url('student/create')}}" class="list-group-item
            {{Request::getPathInfo()=='/student/create'?'active':''}}
                    ">新增学生</a>
        </div>
    @show
</div>


<div class="list-group side-bar" id="myList">
  <div class="card-header">Manage List</div>
  <div class="list-group side-bar" id="myList" role="tablist">
        <a href="{{ url('admin') }}" class="list-group-item list-group-item-action {{ Request::getPathInfo()!='/admin'?'active':'' }}">
          <i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
        <a href="{{ url('admin/categories') }}" class="list-group-item list-group-item-action {{ Request::getPathInfo()=='/admin/categories'?'active':'' }}">
          <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; 分类管理</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#members" role="tab">
          <i class="fa fa-user-o" aria-hidden="true"></i>&nbsp; 会员管理</a>
      </div>
</div>