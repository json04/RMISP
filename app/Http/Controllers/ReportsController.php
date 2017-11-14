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
    	$queries = DB::table('harvester_activities')
            ->leftJoin('week_endings', 'harvester_activities.activities_id', '=', 'week_endings.activities_id')->where('week_endings.weekending', '=', $weekending)
            ->leftJoin('harvesters', 'harvester_activities.harvesters_id', '=', 'harvesters.id')
            ->leftjoin('activities', 'week_endings.activities_id', '=', 'activities.id')->get();
        $arrays = $queries->toArray();
        if (empty($arrays)) {
        	Alert::error('Selected Week Ending has no result', 'FAILED!');
        	return view('error');
        }else{
        	Alert::success('Data has been retrieved. Check Result.', 'SUCCESS!');
        	return view('search.hir-result', compact('arrays'));
        }
    }

    public function generateHir(Request $request){
        $harvest = collect($request->Input('harvesterSelect'));
        $toArray = $harvest->toArray();
        $result = array_filter($toArray, function($data){
            return $data != null;
        });
        dd($result);
    }
}
