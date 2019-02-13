@extends('layouts.master')

@section('title','Home')


@section('css')
    <style type="text/css">
        .carousel-item{
            height: 100vh;
            min-height: 300px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        a{
            font-size: 20px;
            color: black;
            font-family: Arial, Helvetica, sans-serif;
        }
        .btn{
            width: 100px;
        }
        h1{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container text-center{
            opacity: 0.8;
            margin: auto;
        }
    </style>
@endsection

@section('header')
    @include('layouts.nav')
@endsection
@section('content')
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('https://lovingitvegan.com/wp-content/uploads/2015/10/Vanilla-Cake-10.jpg')">
            <div class="carousel-caption d-none d-md-block">
    <div class="container text-center">
        <h1>Welcome to E-Cake</h1>
        <p class="lead">A landing page template freshly redesigned for Bootstrap 4</p>
      </div>
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
               <button class="btn btn-warning">Order Now</button>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://wallpapercave.com/wp/wp2000309.jpg')">
            <div class="carousel-caption d-none d-md-block">
        <div class="container text-center">
            <h1>Welcome to E-Cake</h1>
            <p class="lead">A landing page template freshly redesigned for Bootstrap 4</p>
        </div>
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
               <button class="btn btn-warning">Order Now</button>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://stmed.net/sites/default/files/cake-wallpapers-28219-999125.jpg')">
            <div class="carousel-caption d-none d-md-block">
                 <div class="container text-center">
        <h1>Welcome to E-Cake</h1>
        <p class="lead">A landing page template freshly redesigned for Bootstrap 4</p>
      </div>
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
               <button class="btn btn-warning">Order Now</button>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <h1>Our Product</h1>
<div class="row">
  <div class="col-md-4">
    <div>
      <p align="center" >Birthday Cake</p>
        <img src="{{url('img/cake/product1.jpg')}}" alt="Lights" style="width:100%" height="300px">
    <div class="caption"></div>
    </div>
  </div>

  <div class="col-md-4" >
    <div>
      <p align="center" >Wedding Cake</p>
        <img src="{{url('img/cake/product2.jpg')}}" alt="Nature" style="width:100%" height="300px" >
        <div class="caption"></div>
    </div>
  </div>
  <div class="col-md-4">
    <div>
        <p align="center" >Cup Cake</p>
        <img src="{{url('img/cake/product3.jpg')}}" alt="Fjords" style="width:100%" height="300px">
        <div class="caption"></div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div>
        <img src="{{url('img/cake/product1.jpg')}}" alt="Lights" style="width:100%" height="300px">
        <div class="caption"></div>
    </div>
</div>

  <div class="col-md-4" >
    <div>
        <img src="{{url('img/cake/product2.jpg')}}" alt="Nature" style="width:100%" height="300px" >
        <div class="caption"></div>
    </div>
  </div>

  <div class="col-md-4">
    <div>
        <img src="{{url('img/cake/product3.jpg')}}" alt="Fjords" style="width:100%" height="300px">
        <div class="caption"></div>
    </div>
</div>
</div>
       
      
@endsection
@section('js')
 

@endsection

@section('footer')
    @include('layouts.footer')
@endsection