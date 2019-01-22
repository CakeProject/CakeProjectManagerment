@extends('layouts.master') 
@section('css')
	<style type="text/css">
		#register-form{
			margin: auto;
		}
		#user{
			width: 300px;
			height: 200px;
			margin: 220px;
		}
		#user:hover{
			background-color: grey;
		}
		#seller:hover{
			background-color: grey;
		}
		#seller{
			width: 300px;
			height: 200px;
			margin: 220px;
		}
	</style>
@endsection
@section('content')
<form id="register-form">
 	<button id="user" class="btn btn-success">Create as a user<br><i class="fas fa-users"></i></button>
 	<button id="seller" class="btn btn-success">Create as a seller<br><i class="fas fa-users-tie"></i></button>
</form>
@endsection

