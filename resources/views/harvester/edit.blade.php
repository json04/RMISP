@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				    <h3 class="panel-title">Harvester Information</h3>
				 </div>
			  	<div class="panel-body">
			    	<div class="col-md-3">
			    		<h5><strong style="color: yellow;">First: </strong> {{$harvesters->fname}}</h5>
			    	</div>
			    	<div class="col-md-3">
			    		<h5><strong style="color: yellow;">Middle: </strong> {{$harvesters->mname}}</h5>
			    	</div>
			    	<div class="col-md-3">
			    		<h5><strong style="color: yellow;">Surename: </strong> {{$harvesters->lname}}</h5>
			    	</div>
			    	<div class="col-md-3">
			    		<h5><strong style="color: yellow;">Suffix: </strong> {{$harvesters->suffix}}</h5>
			    	</div>
			    	<div class="col-md-12">
			    		<h5><strong style="color: yellow;">Address: </strong> {{$harvesters->address}}</h5>
			    	</div>
			    	<div class="col-md-3">
			    		<h5><strong style="color: yellow;">Contact Number: </strong> {{$harvesters->contact}}</h5>
			    	</div>
			  	</div>
			</div>
		</div>


		<div class="col-lg-12 col-sm-12">
			<div class="well bs-component">
				<form class="form-horizontal" action="{{ url("/rmisp/public/edit/$harvesters->id") }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
				  <fieldset>
				    <legend>Information Update</legend>

				    <div class="col-lg-4 col-sm-4">
					    <div class="form-group">
					      <label for="inputFirstName" class="col-lg-4 control-label">First Name</label>
					      <div class="col-lg-8">
					        <input type="text" class="form-control" name="fname" id="inputFirstName" placeholder="{{$harvesters->fname}}">
					      </div>
					    </div>
					</div>

				    <div class="col-lg-4 col-sm-4">
				    	<div class="form-group">
					      <label for="inputMiddleName" class="col-lg-4 control-label">Middle Name (Optional)</label>
					      <div class="col-lg-8">
					        <input type="text" class="form-control" name="mname" id="inputMiddleName" placeholder="{{$harvesters->mname}}">
					      </div>
					    </div>
					</div>

					<div class="col-lg-4 col-sm-4">
					    <div class="form-group">
					      <label for="inputLastName" class="col-lg-4 control-label">Last Name</label>
					      <div class="col-lg-8">
					        <input type="text" class="form-control" name="lname" id="inputLastName" placeholder="{{$harvesters->lname}}">
					      </div>
					    </div>
					</div>

					<div class="col-lg-4 col-sm-4">
					    <div class="form-group">
					      <label for="inputSuffix" class="col-lg-4 control-label">Suffix</label>
					      <div class="col-lg-8">
					        <input type="text" class="form-control" name="suffix" id="inputSuffix" placeholder="{{$harvesters->suffix}}">
					      </div>
					    </div>
					</div>

					<div class="col-lg-8 col-sm-8">
					    <div class="form-group">
					      <label for="inputAddress" class="col-lg-4 control-label">Address</label>
					      <div class="col-lg-8">
					        <input type="text" class="form-control" name="address" id="inputAddress" placeholder="{{$harvesters->address}}">
					      </div>
					    </div>
					</div>

					<div class="col-lg-4 col-sm-4">
					    <div class="form-group">
					      <label for="inputContactNumber" class="col-lg-4 control-label">Contact Number</label>
					      <div class="col-lg-8">
					        <input type="text" class="form-control" name="contact" id="inputContactNumber" placeholder="{{$harvesters->contact}}">
					      </div>
					    </div>
					</div>

				    <div class="form-group">
				      <div class="col-lg-12 col-sm-12" align="center">
				        {{-- <a href="/" class="btn btn-default">Back</button> --}}
				        <p align="center">Please Review before clicking the Submit Button</p>
				        <button type="submit" class="btn btn-default">SUBMIT</button>
				        <a type="button" class="btn btn-md btn-default" href="{{ url('/home') }}">Back to Home</a>
				      </div>
				    </div>
				  </fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection