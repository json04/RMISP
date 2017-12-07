@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div class="well bs-component">
					<form class="form-horizontal" action="{{ url('/create-activity-post') }}" method="post" enctype="multipart/form-data" id="activityForm">
						{{-- {!! csrf_field() !!} --}}
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
						<input type="hidden" name="harvestersSelect[]" id="harv">
						<div class="row">
							<div class="col-lg-12 col-sm-12">
								<table id="harvestersSelection" class="table table-stripped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th></th>
											<th>Last Name</th>
											<th>First Name</th>
											<th>Suffix</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th></th>
											<th>Last Name</th>
											<th>First Name</th>
											<th>Suffix</th>
										</tr>
									</tfoot>
									<tbody>
										@foreach($harvesters as $harvester)
										<tr>
											<td>{{-- <input type="checkbox" id="harvSel" name="select" value="{{ $harvester->id }}"> --}}{{ $harvester->id }}</td>
											<td>{{ $harvester->lname }}</td>
											<td>{{ $harvester->fname }}</td>
											<td>{{ $harvester->suffix }}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					  <fieldset>
					    <legend>Harvester Activity Entry</legend>

					    {{-- <input type="text" class="form-control" name="activities_id" id="inputReference" value="" hidden> --}}

					  {{--   <input type="text" name="harvestersSelect" id="hrvstSelect" value="" hidden>  --}}

					    <div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputReference" class="col-lg-4 control-label">Reference</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="reference" id="inputReference" placeholder="Reference">
						      </div>
						    </div>
						</div>

					    <div class="col-lg-4 col-sm-4">
					    	<div class="form-group">
						      <label for="inputDateLoaded" class="col-lg-4 control-label">Date Loaded</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="dateloaded" id="dateloadeddatepicker" placeholder="Date Loaded">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputSDT" class="col-lg-4 control-label">SDT#</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="sdt" id="inputSDT" placeholder="SDT Number">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputUNITID" class="col-lg-4 control-label">Unit ID</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="unitid" id="inputUNITID" placeholder="Unit ID">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputWEEKENDING" class="col-lg-4 control-label">Week Ending</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="we" id="weekendingdatepicker" placeholder="Week Ending">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputGROUPNUMBER" class="col-lg-4 control-label">Group Number</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="groupnumber" id="inputGROUPNUMBER" placeholder="Group Number">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputHAULTON" class="col-lg-4 control-label" style="color: yellow;">(1)Haul/Ton</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="haulton" id="inputHAULTON" placeholder="Haul/Ton">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputDRIVER" class="col-lg-4 control-label">Driver</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="driver" id="inputDRIVER" placeholder="Driver">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputBLOCK" class="col-lg-4 control-label">Block #</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="block" id="inputBLOCK" placeholder="Block Number">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputNUMBEROFHARVESTER" class="col-lg-4 control-label" style="color: yellow;">(2)Number of Harvester</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="numberofharvester" id="inputNUMBEROFHARVESTER" placeholder="Number of Harvester">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputRATETON" class="col-lg-4 control-label" style="color: yellow;">(3)Rate/Ton</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="rateton" id="inputRATETON" placeholder="Rate/Ton">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputDATEMILLED" class="col-lg-4 control-label">Date Milled</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="datemilled" id="datemilleddatepicker" placeholder="Date Milled">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputGROSSTONS" class="col-lg-4 control-label" style="color: yellow;">(4)Gross Tons</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="grosstons" id="inputGROSSTONS" placeholder="Gross Tons">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputTRASHPERCENTAGE" class="col-lg-4 control-label" style="color: yellow;">(5)Trash %</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="trashpercentage" id="inputTRASHPERCENTAGE" placeholder="Trash %">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputMILL" class="col-lg-4 control-label">Mill</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="mill" id="inputMILL" placeholder="Mill">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputTRASHTOTAL" class="col-lg-4 control-label">Trash Total</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="trashtotal" id="inputTRASHTOTAL" placeholder="Trash Total">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputNETTONS" class="col-lg-4 control-label">Net Tons</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="nettons" id="inputNETTONS" placeholder="Net Tons">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputSUGAR" class="col-lg-4 control-label">Sugar</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="sugar" id="inputSUGAR" placeholder="Sugar">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputMOLASES" class="col-lg-4 control-label">Molases</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="molases" id="inputMOLASES" placeholder="Molases">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputDUEHARVESTERS" class="col-lg-4 control-label">Due Harvesters</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="dueharvesters" id="inputDUEHARVESTERS" placeholder="Due Harvesters">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputDUEPERHAVESTERS" class="col-lg-4 control-label">Due/Harvesters</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="dueperharvesters" id="inputDUEPERHAVESTERS" placeholder="Due/Harvesters">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputDUEDRIVER" class="col-lg-4 control-label">Due Driver</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="duedriver" id="inputDUEDRIVER" placeholder="Due Driver">
						      </div>
						    </div>
						</div>

						<div class="col-lg-4 col-sm-4">
						    <div class="form-group">
						      <label for="inputDUEUNIT" class="col-lg-4 control-label">Due Unit</label>
						      <div class="col-lg-8">
						        <input type="text" class="form-control" name="dueunit" id="inputDUEUNIT" placeholder="Due Unit">
						      </div>
						    </div>
						</div>

					    <div class="form-group">
					      <div class="col-lg-12 col-sm-12" align="center">
					        {{-- <a href="/" class="btn btn-default">Back</button> --}}
					        <p align="center">Please Review before clicking the Submit Button</p>
					        <button type="submit" class="btn btn-primary">Submit</button>
					      </div>
					    </div>
					  </fieldset>
					</form>
				</div>
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

	    var table = $('#harvestersSelection').DataTable({
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
		})
		});
	</script>

	{{-- Auto Calculation --}}
	<script type="text/javascript">
		$('#inputGROSSTONS').keyup(function(){
		    $('#inputTRASHPERCENTAGE').keyup(function(){
		    	// Trash Total
		    	var resOne = $('#inputGROSSTONS').val() * $('#inputTRASHPERCENTAGE').val();
			    if (resOne == Number.POSITIVE_INFINITY || resOne == Number.NEGATIVE_INFINITY || isNaN(resOne))
			        resOne = "N/A"; // OR 0
			    var resDecimalOne = resOne.toFixed(3);
			    $('#inputTRASHTOTAL').val(resDecimalOne);

			    // NET TONS
			    var resTwo = $('#inputGROSSTONS').val() - $('#inputTRASHTOTAL').val();
			    if (resTwo == Number.POSITIVE_INFINITY || resTwo == Number.NEGATIVE_INFINITY || isNaN(resTwo))
			        resTwo = "N/A"; // OR 0
			    var resDecimalTwo = resTwo.toFixed(3);
			    $('#inputNETTONS').val(resDecimalTwo);

			    // DUE Harvesters
			    var resThree = $('#inputRATETON').val() * $('#inputNETTONS').val();
			    if (resThree == Number.POSITIVE_INFINITY || resThree == Number.NEGATIVE_INFINITY || isNaN(resThree))
			        resThree = "N/A"; // OR 0
			    var resDecimalThree = resThree.toFixed(3);
			    $('#inputDUEHARVESTERS').val(resDecimalThree);

			    // DUE per Harvesters
			    var resFour = $('#inputDUEHARVESTERS').val() / $('#inputNUMBEROFHARVESTER').val();
			    if (resFour == Number.POSITIVE_INFINITY || resFour == Number.NEGATIVE_INFINITY || isNaN(resFour))
			        resFour = "N/A"; // OR 0
			    var resDecimalFour = resFour.toFixed(3);
			    $('#inputDUEPERHAVESTERS').val(resDecimalFour);

			    // DUE UNIT
			    var resFive = $('#inputGROSSTONS').val() * $('#inputHAULTON').val();
			    if (resFive == Number.POSITIVE_INFINITY || resFive == Number.NEGATIVE_INFINITY || isNaN(resFive))
			        resFive = "N/A"; // OR 0
			    var resDecimalFive = resFive.toFixed(3);
			    $('#inputDUEUNIT').val(resDecimalFive);
		    });
		});
	</script>

	<script>
	  $( function() {
	    $( "#dateloadeddatepicker" ).datepicker({
	    	changeMonth: true,
      		changeYear: true
	    });
	  } );

	  $( function() {
	    $( "#weekendingdatepicker" ).datepicker({
	    	changeMonth: true,
      		changeYear: true
	    });
	  } );

	  $( function() {
	    $( "#datemilleddatepicker" ).datepicker({
	    	changeMonth: true,
      		changeYear: true
	    });
	  } );
	</script>
@endsection