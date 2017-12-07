@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h4><strong>Recent Activity Submission logs</strong></h4>
                <table id="rasl" class="table table-stripped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Date loaded</th>
                            <th>Group</th>
                            <th>Driver</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Date loaded</th>
                            <th>Group</th>
                            <th>Driver</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($activities as $activity)
                        <tr>    
                            <td>{{ $activity->dateloaded }}</td>
                            <td>{{ $activity->groupnumber }}</td>
                            <td>{{ $activity->driver }}</td>
                            <td>
                                <a type="button" class="btn btn-xs btn-primary" href="{{ url("/rmisp/public/view/$activity->id") }}">
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Registered Harvesters Table --}}
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h4><strong>Registered Harvesters</strong></h4>
                <table id="harvesters" class="table table-stripped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Suffix</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Suffix</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($harvesters as $harvester)
                        <tr> 
                            <td>{{ $harvester->lname }}</td>
                            <td>{{ $harvester->fname }}</td>
                            <td>{{ $harvester->suffix }}</td>
                            <td>
                                Edit(under construction)
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
        $('#rasl').DataTable();
        } );
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
        $('#harvesters').DataTable();
        } );
    </script>
@endsection
