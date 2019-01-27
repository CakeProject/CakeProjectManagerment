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
    color: blue;
    font-size:25px;font-weight:700;letter-spacing:0.1em;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
}
.navbar-brand {
    color: red;
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
    color: red;
   font-family: 'Gothic A1', sans-serif;
}
.navbar-nav .nav-item .nav-link:hover{color:green;}
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
    background-image:url('https://quotespics.net/wp-content/uploads/2016/08/Happy-Birthday-Cake-1.jpg');
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
    color:#FF337A;
}
.banner-sub-heading{
    font-family: 'Libre Baskerville', serif;
    font-size: 30px;
    font-weight: 300;
    line-height: 30px;
    margin-bottom: 50px;
    color:#FF337A;
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

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 50%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
  margin: auto;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
 

        </style>
@endsection


@section('content')
    <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>

    <div class="container">
      <h2 style="text-align: center;">Login</h2>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
@endsection
@section('js')
    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
@endsection