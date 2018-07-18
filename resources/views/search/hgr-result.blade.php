@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6 col-md-offset-3">
				<h2 align="center">
					<strong>Harvester Group Report</strong>
				</h2>
				<p align="center"><strong>Select</strong> Number by clicking the check box.</p>
				<form action="{{ url('/generate-week-ending-hgr-excel') }}" method="post" style="margin-top: 5em;">
					<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
					<input type="hidden" name="numberSelect[]" id="harv">
					<input type="hidden" name="weekending" value="{{$inputs}}">
					<table id="numberSelect" class="table table-stripped table-bordered table-hover" cellspacing="0" width="50%" align="center">
						<thead>
							<tr>
								<th>Checkbox</th>
								<th>Group Number</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Checkbox</th>
								<th>Group Number</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach($unique_data as $data)
							<tr>	
								<td>{{ $data }}</td>				
								<td align="center">{{ $data }}</td>
								{{-- <td>{{ $data->dateloaded }}</td> --}}
								{{-- <td align="center">
									<div class="checkbox">
									    <label>
									      <input type="checkbox" name="harvesterSelect[]" value="{{ $data->harvesters->id }}"> 
									    </label>
									</div>
								</td>		 --}}				
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
		var arr = new Array();
		var secArr = [];
		var tok = $("#token").val();
		var csrf = tok;
		var values = [];
		console.log(csrf);

		// var table = $('#harvestersSelection').DataTable();
		// $(':checkbox[name=select]').on('change', function() {
		//     var assignedTo = $(':checkbox[name=select]:checked').map(function() {
		//         return this.value;
		//     })
		//     .get();
		//     var tojson = JSON.stringify(assignedTo);
		//     document.getElementById("harv").value = tojson;
		//     console.log(tojson);
		// });

	    var table = $('#numberSelect').DataTable({
	    	columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
	        } ],
	        select: {
	        	select: true,
	            style:    'multi',
	            selector: 'td:first-child'
	        },
	        order: [[ 1, 'asc' ]],
		});
	    $(this).on( 'click', 'tr', function () {
		    values = [];
		    var d = table.row( this ).data();
		    arr = d[0];
		    secArr.push(arr);
		    //note: needed to fix remove unchecked box from array
		    var unique = secArr.filter(function(elem, index, self) {
		    return index === self.indexOf(elem);
			});
			var tojson = JSON.stringify(unique);
		    document.getElementById("harv").value = tojson;
		    console.log(tojson);
		})
		});
	</script>
@endsection