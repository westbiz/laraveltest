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

    <script type="text/javascript">
  $(document).ready(function() {
    $("#hide").click(function(){
    $(".left").hide();
    });
    $("#show").click(function(){
    $(".left").show();
    });
  });
</script>
</head>
<body>
<div class="container-fluid">
    @include('admins.nav')

</div>
<div class="container-fluid">
    @yield('content')


</div>






<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>
