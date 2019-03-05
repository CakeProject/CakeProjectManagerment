@extends('layouts.master')
 


@section('content')

<div class="container">

	    <form enctype="multipart/form-data" method="POST" action="{{route('cake.update',['id'=>$property->id])}}"  class="col-md-6">
	    	@method("PUT")
			{{-- {{csrf_field()}}  --}}
			@csrf
        <h1 class="text-primary">Edit Cake</h1>
                <div class="form-group">
        	        <label>Cake name : </label>
        		        <select name="cake" id="cake" class="form-control">
							@foreach ($cakes as $cake)
								<option @if($cake->id == $property->cake_id) selected  @endif  value="{{$cake->name}}">{{$cake->name}}</option>	
								 	
							@endforeach
        		        </select>
        	    </div>

        	    <div class="form-group" >
                    <label>Flavour : </label>
    				<select name="flavour" id="fla_id" class="form-control">
						@foreach ($flavors as $flavor)
							<option @if($flavor->id == $property->flavor_id) selected  @endif value="{{$flavor->flavour}}">{{$flavor->flavour}}</option>		
						@endforeach
    				</select>
        		</div>

                <div class="form-group">
        	        <label>Shape : </label>
        		        <select name="shape" id="shape" class="form-control">
							@foreach ($shapes as $shape)
								<option @if($shape->id == $property->shape_id) selected  @endif value="{{$shape->shape}}">{{$shape->shape}}</option>		
							@endforeach
        		        </select>
        	    </div>

	    	    

	    		<div class="form-group" >
	    		    <label>Color : </label>
	    				<select name="color" id="color" class="form-control">
							@foreach ($colors as $color)
								<option @if($color->id == $property->color_id) selected @endif value="{{$color->color}}">{{$color->color}}</option>		
							@endforeach
	    				</select>
	    		</div>
	            
	            <div class="form-group">
	                <label >Picture :</label>
	                <input class="form-control" type="file" value="{{$property->price}}" name="image" class="form-control-file" id="image">
	            </div>

	           <div class="form-group" >
	              	<label>Size:</label>
						<div>		
							<select name="sizes[]" multiple="">
								@foreach ($sizes as $size)
									<!-- <option @if($property->id == $property->cake_id) selected  @endif value="{{$size->size}}">{{$size->size}}</option> -->
								@endforeach
							</select>
							
						</div>
	              	
	            </div>
   	            <div class="form-group">
	                <label >Price:</label>
	                <input name='price' value="{{ $property->price }}" type='number' step="0.01" min="0.01" />
	            </div> 

	            <div class="form-group">
	                <label >Description:</label>
	                <textarea class="form-control" id="description"  name="description">{{ $property->description }}</textarea>
	            </div> 
	    			<button type="submit" id="submit" name="submit_btn" class="btn btn-primary">Submit</button>
	    			<a href="{{url('cake')}}" class="btn btn-danger">Cancel</a><br />
		</form>

@endsection

