@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3" style="margin-top: 5em;">
		<div class="jumbotron" align="center">
			<h3><strong style="color: red">NO RESULT</strong></h3>
			<p>Please double check inputs before clicking submit button.</p>
			<a href="{{ url('/harvester-individual-report') }}" class="btn btn-md btn-round btn-danger">Return to last page</a>
		</div>
	</div>
@endsection

@section('scripts')
@endsection

