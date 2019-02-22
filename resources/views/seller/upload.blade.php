@extends('layouts.master')
 
 @section('script')
 <script src="{{ asset('js/select2.js') }}" ></script>
 @endsection

@section('content')

<div class="container">
	   	@if(count($errors) > 0)
		<div class="alert alert-danger">
		  <ul>
		   @foreach($errors->all() as $error)
		    <li>{{$error}}</li>
		   @endforeach
		  </ul>
		</div>
		@endif
		@if(\Session::has('success_created'))
		  <div class="alert alert-success">
		   <p>{{ \Session::get('success_created') }}</p>
		  </div>
		@endif


	    <form enctype="multipart/form-data" method="post" action="{{url('seller')}}"  class="col-md-6">{{csrf_field()}}
        <h1 class="text-primary">Upload Cake</h1>
        <div class="form-group">
        <label>Shape : </label>
        <select name="shape" id="shape" class="form-control">
                       <option selected="true" value="" data-hidden="true" style="color:red" >Cake shape</option>
                        <option value="circle">Circle</option>
                        <option value="heart">Heart</option>
                        <option value="square">Square</option>
      </div>
	       <div class="form-group" >
                <label>Flavour : </label>
                <input type="text" class="form-control" name="flavour" id="flavour"  placeholder="Cake flavour">
           </div>
          <div class="form-group" >
                <label>Color : </label>
                <input type="text" class="form-control" name="color" id="color"  placeholder="Cake color" >
            </div>
          <div class="form-group">
            <label >Picture :</label>
            <input type="file" name="image" class="form-control-file" id="image">
          </div> 
          <div class="form-group" >
          	<label>Size and Price:</label>
          		<div>
          			<select id="sizePrice" name="sizePrice"multiple >
          			<optgroup label="Select price by each size"></optgroup>
          			  <optgroup label="Size S">
          			    <option value="size S: 5$">5$</option>
          			    <option value="size S: 10">10$</option>
          			    <option value="size S: 15">15$</option>
          			  </optgroup>
          			  <optgroup label="Size M">
          			    <option value="size M: 10">10$</option>
          			    <option value="size M: 15">15$</option>
          			    <option value="size M: 20">20$</option>
          			  </optgroup>
          			</select>
          			
          		</div>
          	
          </div>
          <div class="form-group">
            <label >Description:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
          </div> 
           <button type="submit" id="submit" name="submit_btn" class="btn btn-primary">Submit</button>
           <a href="{{url('seller')}}" class="btn btn-danger">Cancel</a><br />
           	  
		</form>
@endsection
