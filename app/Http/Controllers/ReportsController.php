<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harvester;
use App\Activity;
use App\ActivityWeekending as Pivot;
use App\WeekEnding;
use DB;
use Alert;

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
        //     return $value['id'];
        // }));
        // if (empty($arrays)) {
        // 	Alert::error('Selected Week Ending has no result', 'FAILED!');
        // 	return view('error');
        // }else{
        // 	Alert::success('Data has been retrieved. Check Result.', 'SUCCESS!');
        // 	return view('search.hir-result', compact('arrays'));
        // }
    }

    public function generateHir(Request $request){
        $harvest = $request->Input('harvestersSelect');
        $str = str_replace('"', '', $harvest);
        $dec = json_decode($str[0]);
        $weekending = $request->Input('we');
        $query = HarvesterActivity::all();
        $query->activities()->whereIn('harvester_activities.id', $dec)->get();
        dd($query);
        // $query = DB::table('harvester_activities')->whereIn('harvester_activities.harvesters_id', $dec)->where('harvester_activities.weekending', $weekending)
        // ->leftjoin('activities', 'harvester_activities.activities_id', '=', 'activities.id')
        // ->leftjoin('harvesters', 'harvester_activities.harvesters_id', '=', 'harvesters.id')->get();
        // $grouped = $query->groupBy('id');
        // $activities = $query->toArray();
        // $json = json_decode($query, true);
        // $activities = array_values(array_sort($json, function ($value) {
        //     return $value['id'];
        // }));
        // // dd($activities);

        // return view('reports.hir_results', compact('activities')); 
    }
}
