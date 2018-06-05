<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harvester;
use App\Activity;
use App\ActivityWeekending as Pivot;
use App\WeekEnding;
use DB;
use Alert;
use Excel;
use Carbon\Carbon;

class ReportsController extends Controller
{
    public function hir(){
    	return view('reports.hir');
    }

    public function searchHir(Request $request){
    	$input = $request->Input('weekending');
        // query should retrieve all posible information using the selected weekending input. 
        $weekending = Pivot::where('week_ending', $input)->with('activities', 'harvesters')->get();
        // $arrays = array_values(array_sort($weekending, function ($value) {
        //     return $value['activities_id'];
        // }));
        $arrays = $weekending->unique('harvesters_id');
        if (empty($arrays)) {
        	Alert::error('Selected Week Ending has no result', 'FAILED!');
        	return view('error');
        }else{
        	Alert::success('Data has been retrieved. Check Result.', 'SUCCESS!');
        	return view('search.hir-result', compact('arrays'));
        }
        
    }  

    public function generateHir(Request $request){
        $harvest = $request->Input('harvestersSelect');
        $str = str_replace('"', '', $harvest);
        $dec = json_decode($str[0]);
        $queries = Pivot::whereIn('harvesters_id', $dec)->with('activities', 'harvesters')->get();
        $carbon = Carbon::now();
        $time = $carbon->toDateTimeString();
        Excel::create("Individual_Report_$time", function($excel) use($queries) {
            $excel->sheet('Sheetname', function($sheet) use($queries) {
                foreach ($queries as $value) {
                    $sheet->fromArray(
                        $queries
                    );
                }
            });
        })->download('xls');
    }
}
