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
        Excel::create("Individual_Report_$time", function($excel) use($dec){
            $excel->sheet('HIR', function($sheet) use($dec) {
                $queries = Pivot::whereIn('harvesters_id', $dec)->with('activities', 'harvesters')->get();
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
                $key_combine = array_combine($lnames, $fnames);
                $result = array();
                foreach ($key_combine as $key => $value) {
                    array_push($result, $key." ".$value);
                }
                //Calculations per Harvester
                $calcData = array();
                foreach ($queries as $data) {
                    $info = array($data->harvesters->lname, $data->harvesters->fname, $data->activities->dateloaded, $data->activities->sdt, $data->activities->unitid, $data->activities->numberofharvester, $data->activities->grosstons, $data->activities->trashpercentage, $data->activities->nettons, $data->activities->rateton, $data->activities->dueperharvesters);
                    array_push($calcData, $info);
                }

                $CalcTotal = array(); //empty
                $GrossTons = 0;
                $NetTons = 0;
                $DuePerHarvester = 0;
                $Sdt = 0;
                foreach($calcData as $num => $values) {
                    // $Sdt += $values[3];
                    $Sdt = count(array_keys($calcData));
                    $GrossTons += $values[6];
                    $NetTons += $values[8];
                    $DuePerHarvester += $values[10];
                }
                //Results moved to an empty array
                array_push($CalcTotal, $Sdt);
                array_push($CalcTotal, $GrossTons);
                array_push($CalcTotal, $NetTons);
                array_push($CalcTotal, $DuePerHarvester);
                // dd($CalcTotal);
                //Multidimensional Array from Name and Calculations
                $MultiArr = array(array());
                $ArrMerged = array_merge($result, $CalcTotal);
                $MultiArr = $ArrMerged;
                dd($MultiArr);
                // dd($result);
                // $sheet->fromArray($result,null,'A1',false,false)->prependRow(
                //     array(
                //        'Name'
                //     )
                // );
            });
        })->download('xls');
    }
}
