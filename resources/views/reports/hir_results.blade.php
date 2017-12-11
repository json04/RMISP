@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				@foreach($names as $name)
					<h5 align="center"><?php  echo $name->lname, ', ', substr($name->fname, 0, 1), '.'; ?></h5>
					<table class="table table-stripped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Date Loaded</th>
								<th>SDT #</th>
								<th>Unit ID</th>
								<th>No. Harvesters</th>
								<th>Gross Tons</th>
								<th>Trash</th>
								<th>Net Tons</th>
								<th>Rate/Ton</th>
								<th>Due/Harvester</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Count Total</th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
							</tr>
						</tfoot>
						<tbody>
							@foreach($activities as $value)
							<tr>
								<td>{{ $value->dateloaded }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				@endforeach
			</div>
		</div>
	</div>
@endsection
@section('scripts')
@endsection