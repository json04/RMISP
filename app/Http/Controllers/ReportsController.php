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
                    $name = $data->harvesters->lname." ".$data->harvesters->fname;
                    $dateloaded = $data->activities->dateloaded;
                    $sdt = $data->activities->sdt;
                    $unitid = $data->activities->unitid;
                    $numberofharvester = $data->activities->numberofharvester;
                    $grosstons = $data->activities->grosstons;
                    $trashpercentage = $data->activities->trashpercentage;
                    $nettons = $data->activities->nettons;
                    $rateton = $data->activities->rateton;
                    $dueperharvesters = $data->activities->dueperharvesters;



                    $arr[$name][] = [
                        $data->harvesters->lname." ".$data->harvesters->fname,
                        $dateloaded,
                        $sdt,
                        $unitid,
                        $numberofharvester,
                        $grosstons,
                        $trashpercentage,
                        $nettons,
                        $rateton,
                        $dueperharvesters
                    ];
                }

                $result = array_values($arr);


                //Calculations per Harvester
                $CalcTotal = array(); //empty
                $GrossTons = 0;
                $NetTons = 0;
                $DuePerHarvester = 0;
                $Sdt = 0;
                foreach($result as $values) {
                    foreach ($values as $num => $data) {
                        $Sdt = count(array_keys($values));
                        $GrossTons += $data[5];
                        $NetTons += $data[8];
                        $DuePerHarvester += $data[9];
                    }
                }
                //Results moved to an empty array
                array_push($CalcTotal, $Sdt);
                array_push($CalcTotal, $GrossTons);
                array_push($CalcTotal, $NetTons);
                array_push($CalcTotal, $DuePerHarvester);
                

                $tempArr = array();
                $names = array();
                //Unique Names by ID
                foreach ($queries as $data) {
                    $info = array($data->harvesters->lname." ".$data->harvesters->fname);
                    array_push($tempArr, $info);
                }
                $arrCol = array_column($tempArr, 0);
                $names = array_unique($arrCol);

                //Joining Results
                $result[][] = $names;
                dd($result);

                // $sheet->fromArray($result,null,'A1',false,false)->prependRow(
                //     array(
                //        'Name'
                //     )
                // );
            });
        })->download('xls');
    }
}


// use foreach and separate names and calculations per harvester. Results should be multidimensional array. 