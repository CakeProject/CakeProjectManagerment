@extends('layouts.master')
 


@section('content')

<div class="container">

	    <form enctype="multipart/form-data" method="post" action="{{url('list')}}"  class="col-md-6">
			{{-- {{csrf_field()}}c  --}}
			@csrf
        <h1 class="text-primary">Edit Cake</h1>
                <div class="form-group">
        	        <label>Cake name : </label>
        		        <select name="cake" id="cake" class="form-control">
        							@foreach ($cakes as $cake)
        								<option value="{{$cake->name}}">{{$cake->name}}</option>		
        							@endforeach
        		        </select>
        	    </div>

        	    <div class="form-group" >
                    <label>Flavour : </label>
        				<select name="flavour" id="fla_id" class="form-control">
        							@foreach ($flavors as $flavor)
        								<option value="{{$flavor->flavour}}">{{$flavor->flavour}}</option>		
        							@endforeach
        				</select>
        		</div>

                <div class="form-group">
        	        <label>Shape : </label>
        		        <select name="shape" id="shape" class="form-control">
        							@foreach ($shapes as $shape)
        								<option value="{{$shape->shape}}">{{$shape->shape}}</option>		
        							@endforeach
        		        </select>
        	    </div>

	    	    

	    		<div class="form-group" >
	    		    <label>Color : </label>
	    				<select name="color" id="color" class="form-control">
	    							@foreach ($colors as $color)
	    								<option value="{{$color->color}}">{{$color->color}}</option>		
	    							@endforeach
	    				</select>
	    		</div>
	            
	            <div class="form-group">
	                <label >Picture :</label>
	                <input type="file" name="image" class="form-control-file" id="image">
	            </div>

	            <div class="form-group" >
	              	<label>Size and Price:</label>
	    						<div>
	    							<select id="sizePrice" name="sizePrice" multiple >
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
	    			<a href="{{url('cake')}}" class="btn btn-danger">Cancel</a><br />
		</form>

@endsection

