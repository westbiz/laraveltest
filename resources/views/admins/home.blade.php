@extends('admins.backhome')

@section('title', '后台管理')

@section('content')

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">TX后台管理</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">分类管理</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            业务管理
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div id="content">
    <div class="left">
      <h2>list</h2>
      <!-- List group -->
      <div class="list-group side-bar" id="myList" role="tablist">
        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">Home</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">Profile</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Messages</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">Settings</a>
      </div>
    </div>
    <!-- center -->
    <div class="center">
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <!-- 导航路径 -->
          <div class="bread">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
              </ol>
            </nav>
          </div>
          <div class="main-content">
            <!-- content -->
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="home" role="tabpanel">Home</div>
              <div class="tab-pane" id="profile" role="tabpanel">Profile</div>
              <div class="tab-pane" id="messages" role="tabpanel">Messages</div>
              <div class="tab-pane" id="settings" role="tabpanel">Settings</div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>





@stop