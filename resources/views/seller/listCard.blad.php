@extends('layouts.master')
 


@section('content')
	   <div class="container">
	   	 <form enctype="multipart/form-data" method="post" action="{{url('cake')}}"  class="col-md-6">
			{{-- {{csrf_field()}}c  --}}
			@csrf
	      <br>
	      <h2 class="text-primary">List Cakes</h2>
	      <div class="row" >
	     <?php
		foreach ($cakes as $cake) {
		    echo  '<div class="col-sm-4">
	                      <div class="card h-80" style="width: 18rem;">

	                              <img class="card-img-top" src="./image/'.$cake->image.'" alt="Card image cap">
	                              <ul class="list-group list-group-flush">
	                                <li class="list-group-item">'.$cake->name.'</li>
	                                <li class="list-group-item">'.$cake->flavour.'</li>
	                                <li class="list-group-item">'.$cake->color.'</li>
	                                <li class="list-group-item">'.$cake->description.'</li>
	                                <td>
				                    <a class="btn btn-success" name="click" value="edit" href="edit.php?id='.$cake->id.'">Edit</a>
	                          <a class="btn btn-danger" name="click" value="delete" href="delete.php?id='.$cake->id.'">Delete</a>
				                    
				                    </td>
	                              </ul>
	                             
	                        </div>
	                    </div>'; 

		}

		?>
	</div>
		<br>
		</div>
@endsection
