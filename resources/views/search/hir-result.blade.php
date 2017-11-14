@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6 col-md-offset-3">
				<form action="#" method="post">
					{{ csrf_field() }}
					<table id="harvesterSelect" class="table table-stripped table-bordered table-hover" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Last Name</th>
								<th>First Name</th>
								<th>Date Loaded</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Last Name</th>
								<th>First Name</th>
								<th>Date Loaded</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach($arrays as $data)
							<tr>					
								<td>{{ $data->weekending }}</td>
								<td>{{ $data->weekending }}</td>
								<td>{{ $data->dateloaded }}</td>						
							</tr>
							@endforeach
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
	 <script type="text/javascript">
        $(document).ready(function() {
        $('#harvesterSelect').DataTable();
        } );
    </script>
@endsection