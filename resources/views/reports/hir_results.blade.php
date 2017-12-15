@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				@foreach($activities as $key => $value)		
					{{-- <h5 align="center"><?php  echo $value->lname, ', ', substr($value->fname, 0, 1), '.'; ?></h5> --}}
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
							@foreach($value as $key => $data)				
							<tr>
								@foreach($value as $data)
								<td>{{ $data->dateloaded }}</td>
								<td>{{ $data->sdt }}</td>
								<td>{{ $data->unitid }}</td>
								<td>{{ $data->numberofharvester }}</td>
								<td>{{ $data->grosstons }}</td>
								<td>{{ $data->trashtotal }}</td>
								<td>{{ $data->nettons }}</td>
								<td>{{ $data->rateton }}</td>
								<td>{{ $data->dueperharvesters }}</td>
								@endforeach
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