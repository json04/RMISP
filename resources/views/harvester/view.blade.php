@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
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
			  	<div class="panel-footer" align="center">
			  		<a type="button" class="btn btn-md btn-primary" href="{{ url('/home') }}">Back to Home</a>
			  	</div>
			</div>
		</div>
	</div>
@endsection 