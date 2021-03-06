@extends('layouts.master')
 


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
 
	    <form enctype="multipart/form-data" method="post" action="{{url('cake')}}"  class="col-md-6">
			{{-- {{csrf_field()}}c  --}}
			@csrf
        <h1 class="text-primary">Upload Cake</h1>
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
              	<label>Size:</label>
				<div>

					<select name="sizes[]" multiple="">
						@foreach ($sizes as $size)
							<option value="{{$size->size}}">{{$size->size}}</option>
						@endforeach
					</select>
				</div>
              	
            </div>
               <div class="form-group">
	            <label >Price:</label>
	            <input type="number" required step="0.01" min="0.01" class="form-control" value="{{ old('price') }}" name="price">
	        </div> 

            <div class="form-group">
                <label >Description:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div> 
				<button type="submit" id="submit" name="submit_btn" class="btn btn-primary">Submit</button>
				<a href="{{url('seller')}}" class="btn btn-danger">Cancel</a><br />
		</form>

@endsection

