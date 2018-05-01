<div class="list-group side-bar" id="myList">
  <div class="card-header">Manage List</div>
  <div class="list-group side-bar" id="myList" role="tablist">
    <a href="{{ url('admin') }}" class="list-group-item list-group-item-action {{ Request::getPathInfo()=='/admin'?'active':'' }}">
      <i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
    @foreach($catalogs as $catalog)
      <a href="{{ url('admin/'.$catalog->url) }}" class="list-group-item list-group-item-action {{ Request::getPathInfo()=='/admin/'.$catalog->url?'active':'' }}">
      <i class="{{ $catalog->icon }}" aria-hidden="true"></i>&nbsp; {{$catalog->name}}</a>
    @endforeach
      </div>
</div>


{{-- <div class="list-group side-bar" id="myList">
  <div class="card-header">Manage List</div>
  <div class="list-group side-bar" id="myList" role="tablist">
        <a href="{{ url('admin') }}" class="list-group-item list-group-item-action {{ Request::getPathInfo()=='/admin'?'active':'' }}">
          <i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
        <a href="{{ url('admin/categories') }}" class="list-group-item list-group-item-action {{ Request::getPathInfo()=='/admin/categories'?'active':'' }}">
          <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; 分类管理</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#members" role="tab">
          <i class="fa fa-user-o" aria-hidden="true"></i>&nbsp; 会员管理</a>
      </div>
</div> --}}