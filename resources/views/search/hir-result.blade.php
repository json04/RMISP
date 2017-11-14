@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6 col-md-offset-3">
				<h2 align="center">
					<strong>Harvester Individual Report</strong>
				</h2>
				<p align="center"><strong>Select</strong> harvesters by clicking the check box.</p>
				<form action="{{ url('/generate-week-ending-hir-excel') }}" method="post" style="margin-top: 5em;">
					{{ csrf_field() }}
					<table id="harvesterSelect" class="table table-stripped table-bordered table-hover" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Last Name</th>
								<th>First Name</th>
								<th>Date Loaded</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Last Name</th>
								<th>First Name</th>
								<th>Date Loaded</th>
								<th>Action</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach($arrays as $data)
							<tr>					
								<td>{{ $data->lname }}</td>
								<td>{{ $data->fname }}</td>
								<td>{{ $data->dateloaded }}</td>
								<td align="center">
									<div class="checkbox">
									    <label>
									      <input type="checkbox" name="harvesterSelect[]" value="{{ $data->harvesters_id }}"> 
									    </label>
									</div>
								</td>						
							</tr>
							@endforeach
						</tbody>
					</table>
					<div class="button" align="center">
						<p><strong style="color: red">Review</strong> all selected names before clicking the button.</p>
						<button type="submit" class="btn btn-bg btn-danger">VIEW AND GENERATE</button>
					</div>
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