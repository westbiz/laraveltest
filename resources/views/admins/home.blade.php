@extends('admins.backhome')

@section('title', '后台管理')

@section('content')

  <div id="content">
    <div class="left">
      <!-- List group -->
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
    <!-- center -->
    <div class="center">
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="main-content">
            <!-- content -->
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="home" role="tabpanel">
                <div class="jumbotron">
                  <h1 class="display-3">Welcome Back!</h1>
                  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                  <hr class="m-y-md">
                  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                  <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">See more</a>
                  </p>
                </div>
              </div>
              <div class="tab-pane" id="categories" role="tabpanel">
                <h3>分类管理</h3>
                <hr class="m-y-md">
                <p>@include('categories.index')</p>
              </div>
              <div class="tab-pane" id="members" role="tabpanel">
                <h3>会员管理</h3>
                <hr class="aez">
                <p>...</p>
              </div>
              <div class="tab-pane" id="products" role="tabpanel">
                <h3>产品管理</h3>
                <hr class="aez">
                <p>...</p>
              </div>
              <div class="tab-pane" id="advertises" role="tabpanel">
                <h3>广告管理</h3>
                <hr class="aez">
                <p>...</p>
              </div>
              <div class="tab-pane" id="schedule" role="tabpanel">
                <h3>日程管理</h3>
                <hr class="aez">
                <p>...</p>
              </div>
              <div class="tab-pane" id="settings" role="tabpanel">
                <h3>系统设置</h3>
                <hr class="aez">
                <p>...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

  </div>



@stop