<!DOCTYPE html>
<html>
<head>
@extends('head')
</head>
<body>
@extends('header')
@extends('sidebar')
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		@yield('conten')
		</div>
	</div>
	@extends('script')
	<script src="{{ asset('template/src/plugins/highcharts-6.0.7/code/highcharts.js')}}"></script>
	<script src="{{ asset('template/src/plugins/highcharts-6.0.7/code/highcharts-more.js')}}"></script>
	
</body>
</html>