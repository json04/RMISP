<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harvester;
use App\Activity;
use App\HarvesterActivity;
use App\WeekEnding;
use DB;
use Alert;

class ReportsController extends Controller
{
    public function hir(){
    	return view('reports.hir');
    }

    public function searchHir(Request $request){
    	$weekending = $request->Input('weekending');
    	$query = DB::table('harvester_activities')->where('harvester_activities.weekending', '=', $weekending)->get();
        $unique = $query->unique('harvesters_id');
        $unique->values()->all();
        $arrays = $unique->toArray();
        dd($arrays);

        // if (empty($arrays)) {
        // 	Alert::error('Selected Week Ending has no result', 'FAILED!');
        // 	return view('error');
        // }else{
        // 	Alert::success('Data has been retrieved. Check Result.', 'SUCCESS!');
        // 	return view('search.hir-result', compact('arrays'));
        // }
        
    }

    public function generateHir(Request $request){
        $harvest = collect($request->Input('harvesterSelect'));
        $toArray = $harvest->toArray();
        $results = array_filter($toArray, function($data){
            return $data != null;
        });

       $queries = DB::table('harvesters')->whereIn('harvesters.id', $results)
       ->leftjoin('harvester_activities', 'harvesters.id', '=', 'harvester_activities.harvesters_id')
       ->leftjoin('activities', 'harvester_activities.activities_id', '=', 'activities.id')->get();
        dd($queries);
    }
}
