@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
				    <h3 class="panel-title">Harvester Activity Search Result</h3>
				 </div>
			  	<div class="panel-body">
			    	<div class="col-md-4">
			    		<h5><strong style="color: yellow;">Reference:</strong> {{$activities->reference}}</h5>
			    		<h5><strong style="color: yellow;">Unit ID:</strong> {{$activities->unitid}}</h5>
			    		<h5><strong style="color: yellow;">Haul/Ton:</strong> {{$activities->haulton}}</h5>
			    		<h5><strong style="color: yellow;">Number of Harvest:</strong> {{$activities->numberofharvester}}</h5>
			    		<h5><strong style="color: yellow;">Gross Tons:</strong> {{$activities->grosstons}}</h5>
			    		<h5><strong style="color: yellow;">Trash Total:</strong> {{$activities->trashtotal}}</h5>
			    		<h5><strong style="color: yellow;">Molases:</strong> {{$activities->molases}}</h5>
			    		<h5><strong style="color: yellow;">Due Driver:</strong> {{$activities->duedriver}}</h5>
			    	</div>
			    	<div class="col-md-4">
			    		<h5><strong style="color: yellow;">Date Loaded:</strong> {{$activities->dateloaded}}</h5>
			    		<h5><strong style="color: yellow;">Week Ending:</strong> {{ $activityweekendings->week_ending }}</h5>
			    		<h5><strong style="color: yellow;">Driver:</strong> {{$activities->driver}}</h5>
			    		<h5><strong style="color: yellow;">Rate/Ton:</strong> {{$activities->rateton}}</h5>
			    		<h5><strong style="color: yellow;">Trash %:</strong> {{$activities->trashpercentage}}</h5>
			    		<h5><strong style="color: yellow;">Net Tons:</strong> {{$activities->nettons}}</h5>
			    		<h5><strong style="color: yellow;">Due Harvesters:</strong> {{$activities->dueharvesters}}</h5>
			    		<h5><strong style="color: yellow;">Due Unit:</strong> {{$activities->dueunit}}</h5>
			    	</div>
			    	<div class="col-md-4">
			    		<h5><strong style="color: yellow;">SDT #:</strong> {{$activities->sdt}}</h5>
			    		<h5><strong style="color: yellow;">Group Number:</strong> {{$activities->groupnumber}}</h5>
			    		<h5><strong style="color: yellow;">Block #:</strong> {{$activities->block}}</h5>
			    		<h5><strong style="color: yellow;">Date Milled:</strong> {{$activities->datemilled}}</h5>
			    		<h5><strong style="color: yellow;">Mill:</strong> {{$activities->mill}}</h5>
			    		<h5><strong style="color: yellow;">Sugar:</strong> {{$activities->sugar}}</h5>
			    		<h5><strong style="color: yellow;">Due/Harvesters:</strong> {{$activities->dueperharvesters}}</h5>
			    	</div>
			  	</div>
			  	<div class="panel-footer" align="center">
			  		<a type="button" class="btn btn-md btn-primary" href="{{ url('/home') }}">Back to Home</a>
			  	</div>
			</div>
		</div>
	</div>
@endsection 