@extends('layouts.master')
@section('title','Customize cake')

@section('css')
  <style type="text/css">
  #form{
    width: 30%;
    height: 50%;
    border: 2px solid green;
    margin: auto;
    padding: 20px;
   /* margin-top: 100px;*/
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
<button onclick="window.location.href='/master' " class="btn btn-primary">Back</button>
	<form id="form">
    <h1 class="text-primary">Customize Cake</h1>
  <div class="form-group">
  	<label for="exampleInputName">Shape: </label>
  	<select>
  		<option value="square">Square</option>
  		<option value="heart">Heart</option>
  		<option value="round">Round</option>
  	</select>
  </div>
  <div class="form-group">
    <label for="exampleInputName">Size: </label>
  	<select>
  		<option value="small">Small</option>
  		<option value="medium">Medium</option>
  		<option value="large">Large</option>
  	</select>
  </div>
  <div class="form-group">
  	<label for="exampleInputPrice">Price: </label>
  	<input class="form" type="number" name="price" placeholder="Price">
  </div>
  <div class="form-group">
  	<label for="exampleInputQuantity">Quantity: </label>
  	<select>
  		<option value="one">1</option>
  		<option value="two">2</option>
  		<option value="two">3</option>
  		<option value="two">4</option>
  		<option value="two">5</option>
  		<option value="two">6</option>
  	</select>
  </div>
   <div class="form-group">
    <label>Color:</label>
    <input type="text" name="color" placeholder="Input color">
  </div>
  <div class="form-group">
  	<label>Description:</label>
  	<textarea id="description" placeholder="Description"></textarea>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I agree to the terms and conditions</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Customize</button>
</form>

@endsection

@section('js')
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('description').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
@endsection