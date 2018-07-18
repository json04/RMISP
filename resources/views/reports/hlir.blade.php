@extends('layouts.app')
@section('content')
	<div class="col-lg-12">
		<div class="col-md-6 col-md-offset-3 well" id="ReportsHir">
			<form action="{{ url('/search-week-ending-hlir') }}" method="post">
				{{ csrf_field() }}
				<h5 align="center">
				  	<strong>SELECT WEEK ENDING</strong>
				</h5>
				<p align="center">
					Select <strong>week ending</strong> by clicking input date below.
				</p>
			  	<div class="form-group">
			      <div class="col-md-6 col-md-offset-3">
			        <input type="text" class="form-control" name="weekending" id="weekendingdatepicker">
			      </div>
			    </div>
			    <div class="col-md-6 col-md-offset-3" align="center">
			    	<br>
			    	<button class="btn btn-md btn-default"><strong>Search</strong></button>
			    </div>
			</form>
		</div>
	</div>
@endsection

@section('scripts')
	<script>
		$( function() {
		    $( "#weekendingdatepicker" ).datepicker({
		    	changeMonth: true,
	      		changeYear: true
		    });
		});
	</script>
@endsection