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
        $carbon = Carbon::now();
        $time = $carbon->toDateTimeString();
        // Excel::create("Individual_Report_$time", function($excel) use($dec){
        //     $excel->sheet('Sheetname', function($sheet) use($dec) {
        //         $queries = Pivot::whereIn('harvesters_id', $dec)->with('activities', 'harvesters')->get();
        //         $arr = array();
        //         foreach ($queries as $data) {
        //             $info = array($data->week_ending, $data->harvesters->lname, $data->activities->dateloaded);
        //             array_push($arr, $info);
        //         }
        //         $sheet->fromArray($arr,null,'A1',false,false)->prependRow(array(
        //                 'Week Ending', 'Last Name', 'Date Loaded'
        //             )

        //         );
        //     });
        // })->download('xls');

        $queries = Pivot::whereIn('harvesters_id', $dec)->with('activities', 'harvesters')->get();

        //Retrieve names to array
        $arr = array();
        foreach ($queries as $data) {
            $info = array($data->harvesters->lname, $data->harvesters->fname);
            array_push($arr, $info);
        }
        //separate unique names to array
        $names = array();
        $lnames = array_column($arr, 0);
        $fnames = array_column($arr, 1);
        $uniqueLNames = array_unique($lnames);
        $uniqueFNames = array_unique($fnames);
        array_push($names, $uniqueLNames);
        array_push($names, $uniqueFNames);
        $combine = array_combine($lnames, $fnames);
        dd($combine);
    }
}
