<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harvester;
use App\HarvesterActivity;
use App\Activity;
use App\WeekEnding;
use App\DateLoaded;
use Input;
use DB;
use Alert;

class ActivityController extends Controller
{

    public function create()
    {
        $harvesters = Harvester::all();
        return view('activity.create', compact('harvesters'));
    }
    
    public function store(Request $request)
    {
    
        $activity = new Activity;
        $activity->reference = $request->Input('reference');
        $activity->dateloaded = $request->Input('dateloaded');
        $activity->sdt = $request->Input('sdt');
        $activity->unitid = $request->Input('unitid');
        $activity->groupnumber = $request->Input('groupnumber');
        $activity->haulton = $request->Input('haulton');
        $activity->driver = $request->Input('driver');
        $activity->block = $request->Input('block');
        $activity->numberofharvester = $request->Input('numberofharvester');
        $activity->rateton = $request->Input('rateton');
        $activity->datemilled = $request->Input('datemilled');
        $activity->grosstons = $request->Input('grosstons');
        $activity->trashpercentage = $request->Input('trashpercentage');
        $activity->mill = $request->Input('mill');
        $activity->trashtotal = $request->Input('trashtotal');
        $activity->nettons = $request->Input('nettons');
        $activity->sugar = $request->Input('sugar');
        $activity->molases = $request->Input('molases');
        $activity->dueharvesters = $request->Input('dueharvesters');
        $activity->dueperharvesters = $request->Input('dueperharvesters');
        $activity->duedriver = $request->Input('duedriver');
        $activity->dueunit = $request->Input('dueunit');
        $activity->save();

        $we = new WeekEnding;
        $we->activities_id = $activity->id;
        $we->weekending = $request->Input('we');
        $we->dateloaded = $request->Input('dateloaded');
        $we->save();

        // $dl = new DateLoaded;
        // $dl->week_endings_id = $we->id;
        // $dl->activities_id = $activity->id;
        // $dl->dateloaded = $request->Input('dateloaded');
        // $dl->save();

        $harvest = collect($request->Input('harvesterSelect'));
        $toArray = $harvest->toArray();
        $result = array_filter($toArray, function($data){
            return $data != null;
        });
        foreach ($result as $value) {
            $storeHarvester = new HarvesterActivity;
            $storeHarvester->harvesters_id = $value;
            $storeHarvester->activities_id = $activity->id;
            $storeHarvester->save();
        }

        Alert::success('Data have been successfully added to database!', 'Success!');
        return back()->withInput(); 
        // $harvesterSelect = $request->Input('harvesterSelect');
        // DB::table('harvester_activities')->insert([
        //     'harvesters_id' => $harvesterSelect[],
        //     'activities_id' => $activity->id
        // ]);

    	// $reference = $request->Input('reference');
    	// $dateloaded = $request->Input('dateloaded');
    	// $sdt = $request->Input('sdt');
    	// $unitid = $request->Input('unitid');
    	// $weekending = $request->Input('we');
    	// $groupnumber = $request->Input('groupnumber');
    	// $haulton = $request->Input('haulton');
    	// $driver = $request->Input('driver');
    	// $block = $request->Input('block');
    	// $numberofharvester = $request->Input('numberofharvester');
    	// $rateton = $request->Input('rateton');
    	// $datemilled = $request->Input('datemilled');
    	// $grosstons = $request->Input('grosstons');
    	// $trashpercentage = $request->Input('trashpercentage');
    	// $mill = $request->Input('mill');
    	// $trashtotal = $request->Input('trashtotal');
    	// $nettons = $request->Input('nettons');
    	// $sugar = $request->Input('sugar');
    	// $molases = $request->Input('molases');
    	// $dueharvesters = $request->Input('dueharvesters');
    	// $dueperharvesters = $request->Input('dueperharvesters');
    	// $duedriver = $request->Input('duedriver');
    	// $dueunit = $request->Input('dueunit');

    	// dd($harvesters, $reference, $dateloaded, $sdt, $unitid, $weekending, $groupnumber, $haulton, $driver, $block,
    	// 	$numberofharvester, $rateton, $datemilled, $grosstons, $trashpercentage, $mill, $trashtotal, $nettons, $sugar, $molases,
    	// 	$dueharvesters, $dueperharvesters, $duedriver, $dueunit);
    }
}
