@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6 col-md-offset-3">
				<h2 align="center">
					<strong>Hauling Individual Report</strong>
				</h2>
				<p align="center"><strong>Select</strong> Individual Truckers by clicking the check box.</p>
				<form action="{{ url('/generate-week-ending-hlir-excel') }}" method="post" style="margin-top: 5em;">
					<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
					<input type="hidden" name="haulingSelect[]" id="haul">
					<input type="hidden" name="weekending" value="{{$inputs}}">
					<table id="haulingSelect" class="table table-stripped table-bordered table-hover" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Checkbox</th>
								<th>Date Loaded</th>
								<th>Unit Name</th>
								<th>Driver</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Checkbox</th>
								<th>Date Loaded</th>
								<th>Unit Name</th>
								<th>Driver</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach($arrays as $data)
							<tr>	
								<td>{{ $data->activities->id }}</td>				
								<td>{{ $data->activities->dateloaded }}</td>
								<td>{{ $data->activities->unitid }}</td>
								<td>{{ $data->activities->driver }}</td>
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
			var secArr = new Array();
			// var tok = $("#token").val();
			// var csrf = tok;
			var values = [];
			// console.log(csrf);
		    var table = $('#haulingSelect').DataTable( {
		        rowId: 'extn',
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
		        dom: 'Bfrtip',
		        order: [[ 1, 'asc' ]],
		    });
		    var events = $('#events');
		    table
		        .on( 'select', function ( e, dt, type, indexes ) {
		            var rowData = table.rows( indexes ).data().toArray();
		            // events.prepend( '<div><b>'+type+' selection</b> - '+JSON.stringify( rowData )+'</div>' );
		            console.log("selected");
				    secArr.push(rowData[0][0]);
				    var unique = secArr.filter(function(elem, index, self) {
					    return index === self.indexOf(elem);
					});
					var tojson = JSON.stringify(unique);
					console.log(tojson);
					document.getElementById("haul").value = tojson;
		        })
		        .on( 'deselect', function ( e, dt, type, indexes ) {
		            var rowData = table.rows( indexes ).data().toArray();
		            // events.prepend( '<div><b>'+type+' <i>de</i>selection</b> - '+JSON.stringify( rowData )+'</div>' );
		            console.log("deselected");
					var selData = rowData[0][0];
					var index = secArr.indexOf(selData);
					if (index > -1) {
						secArr.splice(index, 1);
					}
					var unique = secArr.filter(function(elem, index, self) {
					    return index === self.indexOf(elem);
					});
					var tojson = JSON.stringify(unique);
					console.log(tojson);
					document.getElementById("haul").value = tojson;
		        });
		});
	</script>
@endsection