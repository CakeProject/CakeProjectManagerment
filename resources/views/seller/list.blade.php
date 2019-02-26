@extends('layouts.master')

@section('content')
<div class="row justify-content-md-center">
	 <div class="col-md-9">
		<br />
		<h1 align="center" class="text-primary">Display List</h1>
		<br />
	  @if($message = Session::get('success_created'))
	  <div  class="alert alert-success">
		   <p>{{$message}}</p>
	  </div>
	  @endif
	  <div align="right">
	  	<a href="{{route('cake.create')}}" class="btn btn-primary">Add Cake</a><br />
	  </div>
	  <br />
	  <table class="table table-bordered table-striped">
		   <tr>
		    <th>Cake name</th>
		    <th>Flavour</th>
		    <th>Shape</th>
		    <th>Color</th>
		    <th>Cake Image</th>
		    <th>Description</th>
		    <th>Edit</th>
		    <th>Delete</th>
		   </tr>
		   @foreach($properties as $row)
			   <tr>
		    	<td>{{ $row->cake()->getResults()->name }}</td>
			    <td>{{ $row->flavour()->getResults()->flavour }}</td>
			    <td>{{ $row->shape()->getResults()->shape }}</td>
			    <td>{{ $row->color()->getResults()->color }}</td> 
			    <td><img width="70px" height="50px" src="storage/cake_img/{{ $row['image'] }}" ></td>
			
			    <td>{{$row['description']}}</td>
			    <td><a href="{{action('CakeController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
			    <td>
			    	<form method="post" class="delete_form" action="{{action('CakeController@destroy', $row['id'])}}">
			    	 {{csrf_field()}}
			    	 <input type="hidden" name="_method" value="DELETE" />
			    	 <button type="submit" class="btn btn-danger">Delete</button>
			    	</form>
			    </td>
			   </tr>
		   @endforeach
		   <script>
		   $(document).ready(function(){
		    $('.delete_form').on('submit', function(){
		     if(confirm("Are you sure you want to delete it?"))
		     {
		      return true;
		     }
		     else
		     {
		      return false;
		     }
		    });
		   });
		   </script>
	  </table>
	 </div>
</div>

@endsection
