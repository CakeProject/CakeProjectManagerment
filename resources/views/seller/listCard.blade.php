@extends('layouts.master')
 


@section('content')
	   <div class="container">
	   	 <form enctype="multipart/form-data" method="post" action="{{url('cake')}}"  class="col-md-6">

			{{-- {{csrf_field()}}c  --}}
			@csrf
	      <br>
	      <h2 class="text-primary">List Cakes</h2>
	      <div class="row" >
	    
		@foreach ($cakes as $cake) 
		    <div class="col-sm-4">
	                      <div class="card h-80" style="width: 18rem;">

	                              <img class="card-img-top" src="./image/'.$cake->image.'" alt="Card image cap">
	                              <ul class="list-group list-group-flush">
	                                <li class="list-group-item">'.$cake->name.'</li>
	                                <li class="list-group-item">'.$cake->flavour.'</li>
	                                <li class="list-group-item">'.$cake->color.'</li>
	                                <li class="list-group-item">'.$cake->description.'</li>
	                        
	   
	                              </ul>
	                             
	                        </div>
	                    </div>
	    @endforeach
	</div>
		<br>
		</div>
@endsection
