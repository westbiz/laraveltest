<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>

	<link href="{{ asset('css/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css/bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css/bootstrap-reboot.css') }}" rel="stylesheet">

</head>
<body>
	@section('sidebar')

	@show
	<div class="container-fluid">
		@yield('content')

	</div>

		@yield('footer')



	<script src="https://cdn.bootcss.com/jquery/1.12.3/jquery.min.js"></script>
	<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>
</html>