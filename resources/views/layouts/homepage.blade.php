@extends('layouts.master')

@section('title','Home')

@section('css')
	<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Gothic+A1|Kaushan+Script|Libre+Baskerville|Lobster');
.body{
	font-family: 'Gothic A1', sans-serif;
	font-size:16px;
	}
	p{
	color:#6c6c6f;
	font-size:1em;
	}
	h1,h2,h3,h4,h5,h6{color:#323233;text-transform:uppercase;}

.navbar-brand  span{
	color: #fed136;
	font-size:25px;font-weight:700;letter-spacing:0.1em;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
}
.navbar-brand {
	color: blue;
	font-size:25px;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
	font-weight:700;
	letter-spacing:0.1em;
}

.navbar-nav .nav-item .nav-link{
	padding: 1.1em 1em!important;
	font-size: 120%;
    font-weight: 500;
    letter-spacing: 1px;
    color: blue;
   font-family: 'Gothic A1', sans-serif;
}
.navbar-nav .nav-item .nav-link:hover{color:#fed136;}
.navbar-expand-md .navbar-nav .dropdown-menu{
	border-top:3px solid #fed136;
}
.dropdown-item:hover{background-color:#fed136;color:#fff;}
nav{-webkit-transition: padding-top .3s,padding-bottom .3s;
    -moz-transition: padding-top .3s,padding-bottom .3s;
    transition: padding-top .3s,padding-bottom .3s;
    border: none;
	}
	
 .shrink {
    padding-top: 0;
    padding-bottom: 0;
    background-color: #212529;
}
.banner{
	background-image:url('https://static01.nyt.com/images/2018/02/20/dining/20COOKING-ALMOND-CAKE1/20COOKING-ALMOND-CAKE1-threeByTwoMediumAt2X.jpg');
	text-align: center;
    color: #fff;
   
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.banner-text{
	padding:200px 0 150px 0;
}
.banner-heading{
	font-family: 'Lobster', cursive;
	font-size: 75px;
    font-weight: 700;
    line-height: 100px;
    margin-bottom: 30px;
	color:white;
}
.banner-sub-heading{
	font-family: 'Libre Baskerville', serif;
	font-size: 30px;
    font-weight: 300;
    line-height: 30px;
    margin-bottom: 50px;
	color:black;
}

.btn-banner{
	padding:5px 20px;
	border-radius:10px;
	font-weight:700;
	line-height:1.5;
	text-align:center;
	color:#fff;
	text-transform:uppercase;
}
.text-intro{
	width:90%;
	margin:auto;
	text-align:center;
	padding-top:30px;
}


/* mobile view */
@media (max-width:500px)
{
	.navbar-nav{
		background-color:#000;
		border-top:3px solid #fed136;
		color:#fff;
		z-index:1;
		margin-top:5px;
		}
	.navbar-nav .nav-item .nav-link{
	padding: 0.7em 1em!important;
	font-size: 100%;
    font-weight: 500;
    }
	.banner-text{
	padding:150px 0 150px 0;
}
.banner-heading{
	font-size: 30px;
    line-height: 30px;
    margin-bottom: 20px;
}
.banner-sub-heading{
	font-size: 10px;
    font-weight: 200;
    line-height: 10px;
    margin-bottom: 40px;
}

}

@media (max-width:768px){
	.banner-text{
	padding:150px 0 150px 0;
}
	.banner-sub-heading{
	font-size: 23px;
    font-weight: 200;
    line-height: 23px;
    margin-bottom: 40px;
}
}
 

	</style>
@endsection

@section('header')
	@include('layouts.nav')
@endsection

@section('content')
	
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/cake/cake.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/cake/product3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/cake/cake.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection