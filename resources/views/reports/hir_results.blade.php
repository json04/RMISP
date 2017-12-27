@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				@foreach($activities as $value)
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
							<tr>
								@foreach($value as $data)
									<td>
										{{ $data }}
									</td>
								@endforeach
							</tr>
						</tbody>
					</table>
				@endforeach
			</div>
		</div>
	</div>
@endsection
@section('scripts')
@endsection