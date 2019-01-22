@extends('layouts.master')

@section('title',"Home")

@section('css')
	<style type="text/css">
		body{
			background:"green";
		}
	</style>
@endsection

@section('nav')
	This is child content
	@parent
@endsection