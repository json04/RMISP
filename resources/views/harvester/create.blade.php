@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<div class="well bs-component">
				<form class="form-horizontal" action="{{ url('/create-harvester-post') }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
				  <fieldset>
				    <legend>Harvester Entry</legend>

				    <div class="col-lg-4 col-sm-4">
					    <div class="form-group">
					      <label for="inputFirstName" class="col-lg-4 control-label">First Name</label>
					      <div class="col-lg-8">
					        <input type="text" class="form-control" name="fname" id="inputFirstName" placeholder="First Name">
					      </div>
					    </div>
					</div>

				    <div class="col-lg-4 col-sm-4">
				    	<div class="form-group">
					      <label for="inputMiddleName" class="col-lg-4 control-label">Middle Name (Optional)</label>
					      <div class="col-lg-8">
					        <input type="text" class="form-control" name="mname" id="inputMiddleName" placeholder="Middle Name (OPTINAL)">
					      </div>
					    </div>
					</div>

					<div class="col-lg-4 col-sm-4">
					    <div class="form-group">
					      <label for="inputLastName" class="col-lg-4 control-label">Last Name</label>
					      <div class="col-lg-8">
					        <input type="text" class="form-control" name="lname" id="inputLastName" placeholder="Last Name">
					      </div>
					    </div>
					</div>

					<div class="col-lg-8 col-sm-8">
					    <div class="form-group">
					      <label for="inputAddress" class="col-lg-4 control-label">Address</label>
					      <div class="col-lg-8">
					        <input type="text" class="form-control" name="address" id="inputAddress" placeholder="Address">
					      </div>
					    </div>
					</div>

					<div class="col-lg-4 col-sm-4">
					    <div class="form-group">
					      <label for="inputContactNumber" class="col-lg-4 control-label">Contact Number</label>
					      <div class="col-lg-8">
					        <input type="text" class="form-control" name="contact" id="inputContactNumber" placeholder="Contact Number (OPTIONAL)">
					      </div>
					    </div>
					</div>

				    <div class="form-group">
				      <div class="col-lg-12 col-sm-12" align="center">
				        {{-- <a href="/" class="btn btn-default">Back</button> --}}
				        <p align="center">Please Review before clicking the Submit Button</p>
				        <button type="submit" class="btn btn-primary">Submit</button>
				      </div>
				    </div>
				  </fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection