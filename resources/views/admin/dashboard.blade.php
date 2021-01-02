@extends('admin_layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<div class="panel panel-danger panel1">
		  <!-- Default panel contents -->
		  <div class="panel-heading panel-heading1">User Information  <a href="{{URL::to('record')}}"  class="btn btn-success">Create</a></div>

		  <!-- Table -->
		  <table class="table" border="5px solid red">
		    <tr>
		    	<td>ID</td>
		    	<td>Name</td>
		    	<td>Mobile</td>
		    	<td>Email</td>
		    	<td>Address</td>
		    	<td>Photo</td>
		    	<td>Publication Status</td>
		    	<td>Action</td>
		    </tr>
		    <?php  
		 $all_record_info = DB::table('records')->get();
    	 ?>
		    @foreach($all_record_info as $v_record)
		    <tr>
		    	<td>{{$v_record->id}}</td>
		    	<td>{{$v_record->name}}</td>
		    	<td>{{$v_record->mobile}}</td>
		    	<td>{{$v_record->email}}</td>
		    	<td>{{$v_record->address}}</td>
		    	<td><img src="{{URL::to($v_record->photo)}}" style= "width: 100px; height: 100px"></td>
		    	<td>
		    		@if($v_record->publication_status == 1)
		    		<span class="label label-success">Active</span>
		    		@else
		    		<span class="labe label-danger">Dactive</span>
		    	 	@endif

		    	 	@if($v_record->publication_status ==1)
		    	 	<a class="btn btn-danger" href="{{URL::to('/deactive-record/'.$v_record->id)}}">
										<i class="halflings-icon white thumbs-down">Deactive</i>  
									</a>
					@else
		    	 	<a class="btn btn-success" href="{{URL::to('/active-record/'.$v_record->id)}}">
										<i class="halflings-icon white thumbs-up">Active</i>  
									</a>
		    	 	@endif


		    	 </td>
		    	<td>

					<a href="{{URL::to('/delete-record/'.$v_record->id)}}" class="btn btn-danger">Delete</a>
					<a href="{{URL::to('/edit-record/'.$v_record->id)}}" class="btn btn-success">Edit</a>

		    	</td>
		    </tr>
		    @endforeach
		  </table>
		</div>

	<script type="text/javascript" src={{("public/js/bootstrap.js")}}></script>
	<script type="text/javascript" src={{("public/js/bootstrap.min.js")}}></script>
	<script type="text/javascript" src={{("public/js/npm.js")}}></script>	
</body>
</html>
@endsection