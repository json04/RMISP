<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harvester;
use App\ActivityWeekEnding as Pivot;
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
        $we->weekending = $request->Input('we');
        $we->save();

        $harvest = $request->Input('harvestersSelect');
        $str = str_replace('"', '', $harvest);
        $dec = json_decode($str[0]);
    
        foreach ($dec as $value) {     
            $storeHarvester = new Pivot;       
            $storeHarvester->activities_id = $activity->id;
            $storeHarvester->week_endings_id = $we->id;
            $storeHarvester->harvesters_id = $value;
            $storeHarvester->save();      
        }
        

        Alert::success('Data have been successfully added to database!', 'Success!');
        return back()->withInput(); 
    }
}
