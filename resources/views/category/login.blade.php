@extends('layouts.master')
@section('title','Login')

@section('css')
<style type="text/css">
  #form{
    width: 30%;
    height: 50%;
    border: 2px solid green;
    margin: auto;
    padding: 20px;
    margin-top: 200px;
  }
  h1{
    text-align: center;

  }
  body{
   /* background-image: url('https://i.ytimg.com/vi/nZYtYk-1m7U/maxresdefault.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;*/
    font-family: Georgia, serif;
  }

</style>
@endsection

@section('content')
<form id="form">
  <div class="form-group">
    <h1>Login</h1>
    <label for="exampleInputUsername1">Username</label>
    <input type="text" class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp" name="username" placeholder="Enter your username">
    <small id="emailHelp" class="form-text text-muted">Nice to see you back!</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Please tick here</label>
  </div>
  <button id="login" type="submit" class="btn btn-primary">Login</button>
  <a class="btn btn-link" href="">Forgot Your Password?</a>
</form>
@endsection