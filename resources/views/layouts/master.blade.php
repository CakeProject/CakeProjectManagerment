<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Home Page')
	</title>
	<link rel="stylesheet" type="text/css" href="
	{{url('css/app.css')}}">
	<script type="text/javascript" src="{{url('js/app.js')}}"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<style type="text/css">
		body,html{
			height: 100%;
			margin: 0;
		}
		.bg{
			background-image: url("img/cake/cake.jpg");
			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;

		}
	</style>
	@section('css')
	@show

</head>
<body>
	<div class="bg"></div>
<!-- @section('header')
	@include('layouts.nav')
@show


 @section('content')

 @show

@section('footer')
 	@include('layouts.footer')
@show -->

</body>
</html>