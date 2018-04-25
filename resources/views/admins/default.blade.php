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


</head>
<body>
<div class="container-fluid">
    @include('admins.nav')




</div>
<div class="container-fluid">
   <div class="left">
      <!-- List group -->
      <div class="list-group side-bar" id="myList">
        <div class="card-header">Manage List</div>
        <li><a target="fname" class="list-group-item list-group-item-action {{ Request::getPathInfo() != '/welcome'?'active':'' }}" href="{{ url('welcome') }} }}">
          <i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a></li>
        @forelse($categories as $category)

        <li><a target="fname" class="list-group-item list-group-item-action {{ Request::getPathInfo() == '/categories'?'active':'' }}" href="{{ route('categories.index') }}">
          <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; 分类管理</a></li>
          @empty
        <p>暂无内容</p>
        @endforelse

        <li><a target="fname" class="list-group-item list-group-item-action" href="#members">
          <i class="fa fa-user-o" aria-hidden="true"></i>&nbsp; 会员管理</a></li>
        <li><a target="fname" class="list-group-item list-group-item-action" href="#products">
          <i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; 产品管理</a></li>
        <li><a target="fname" class="list-group-item list-group-item-action" href="#advertises">
          <i class="fa fa-flag" aria-hidden="true"></i>&nbsp; 广告管理</a></li>
        <li><a target="fname" class="list-group-item list-group-item-action" href="#schedule">
          <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; 日程管理</a></li>
         <li><a target="fname" class="list-group-item list-group-item-action" href="#settings">
          <i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; 系统设置</a></li>
      </div>
      @section('leftmenu')
                <div class="list-group">
                    <a href="{{url('student/index')}}" class="list-group-item
                    {{Request::getPathInfo()!='/student/create'?'active':''}}
                            ">学生列表</a>
                    <a target="fname" href="{{url('student/create')}}" class="list-group-item
                    {{Request::getPathInfo()=='/student/create'?'active':''}}
                            ">新增学生</a>`
                </div>
            @show
    </div>

    <div class="center">
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="main-content">
            <!-- content -->
            <!-- Tab panes -->
            <iframe name="fname" id="myiframe" frameborder="false" style="background-color: red;" width="100%" >
                123
            </iframe>
          </div>
        </div>
      </div>
      </div>
    </div>

<script type="text/javascript">
    var ifm= document.getElementById("myiframe");
    ifm.height=document.documentElement.clientHeight;
</script>

</div>






<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>
