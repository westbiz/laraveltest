@extends('admins.backhome')

@section('title', '后台管理')

@section('content')

  <div id="content">
    <div class="left">
      <!-- List group -->
      <div class="list-group side-bar" id="myList" role="tablist">
        <div class="card-header">分类管理</div>
        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#categories" role="tab">分类管理</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#members" role="tab">会员管理</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#products" role="tab">产品管理</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#advertises" role="tab">广告管理</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">国内旅游</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">出境旅游</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">旅游包车</a>
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
                <div class="list-group">
  <a class="list-group-item" href="#"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; 首页</a>
  <a class="list-group-item" href="#"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; 关于我们</a>
  <a class="list-group-item" href="#"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; 后台应用编辑</a>
  <a class="list-group-item" href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; 系统设置</a>
</div>
              </div>
              <div class="tab-pane" id="members" role="tabpanel">
                <h3>会员管理</h3>
                <hr class="aez">
              </div>
              <div class="tab-pane" id="products" role="tabpanel">
                <h3>产品管理</h3>
                <hr class="aez">
              </div>
              <div class="tab-pane" id="advertises" role="tabpanel">
                <h3>广告管理</h3>
                <hr class="aez">
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

  </div>



@stop