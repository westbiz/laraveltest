<!DOCTYPE html>
<html lang="zh_CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="{{ asset('css/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css/bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css/bootstrap-reboot.css') }}" rel="stylesheet">

    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('style')


</head>
<body>
<div class="container-fluid">
    @include('admins.nav')

</div>
<div class="container-fluid">
    <div class="left">
      <!-- List group -->
{{--       <div class="list-group side-bar" id="myList">
        <div class="card-header">Manage List</div>
        @foreach($categories as $category)
        <li><a target="fname" class="list-group-item list-group-item-action active" href="{{ route('categories.index') }}">{{$category->name}}</a></li>
        @endforeach
      </div> --}}
      <div class="list-group side-bar" id="myList" role="tablist">
        <div class="card-header">Manage List</div>
        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">
          <i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#categories" role="tab">
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
    </div>
</div>

<div class="center">
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="main-content">
            <!-- content -->
            <!-- Tab panes -->
            @component('admins.tabcontent')
              @slot('title')
                categories
              @endslot
              @include('admins.categorieslist')
            @endcomponent
            </div>
          </div>
        </div>
      </div>
  </div>
</div>




<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>
