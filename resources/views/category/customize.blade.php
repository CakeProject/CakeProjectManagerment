@extends('layouts.master')
@section('title','Customize cake')

@section('content')
	<h1 class="text-primary">Customize Cake</h1>
	<form>
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
  	<input class="form" type="text" name="price" placeholder="Price">
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
  	<label>Description</label>
  	<textarea placeholder="Description"></textarea>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I agree to the terms and conditions</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
</form>

@endsection