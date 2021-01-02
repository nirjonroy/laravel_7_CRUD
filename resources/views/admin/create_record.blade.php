@extends('admin_layout')
@section('content')

	<div id="content" class="span10" style="padding: 20px;">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">/Add User</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Users</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/save-record')}}" method="post" role="form" enctype="multipart/form-data">
							
							{{csrf_field()}}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">User Name</label>
							  <div class="controls">
								<input type="text" class="" name="name" required="" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">User MObile</label>
							  <div class="controls">
								<input type="text" class="" name="mobile" required="" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">User email</label>
							  <div class="controls">
								<input type="text" class="" name="email" required="" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">User Address</label>
							  <div class="controls">
								<input type="text" class="" name="address" required="" >
							  </div>
							</div>

							
							<div class="control-group">
			                <label class="control-label" for="fileInput">image</label>
			                <div class="controls">
			                  <input type="file" id="fileInput" name="photo">
			                </div>
			                </div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">

							  	<input type="checkbox" name="publication_status"  value="1">

							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add User </button>
							  <button type="reset" class="btn">Cancel</button>
							</div>

						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


@endsection