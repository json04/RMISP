<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harvester;
use App\Activity;
use App\ActivityWeekending as Pivot;
use DB;
use Alert;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $harvesters = Harvester::all();
        $activities = Activity::all();
        return view('home', compact('harvesters', 'activities', 'query'));
    }

    public function retrieve($id)
    {
        $activities = Activity::findOrFail($id);
        return view('search.view-activity-results', compact('activities'));
    }

    public function edit($id)
    {
        $activities = Activity::findOrFail($id);
        $harvesters = Harvester::all();
        return view('activity.edit', compact('activities', 'harvesters'));
    }

    public function update(Request $request, $id)
    {
        // $activities = Activity::findOrFail($id);
        // $activities->reference = $request->Input('reference');
        // $activities->dateloaded = $request->Input('dateloaded');
        // $activities->week_ending = $request->Input('we');
        // $activities->sdt = $request->Input('sdt');
        // $activities->unitid = $request->Input('unitid');
        // $activities->groupnumber = $request->Input('groupnumber');
        // $activities->haulton = $request->Input('haulton');
        // $activities->driver = $request->Input('driver');
        // $activities->block = $request->Input('block');
        // $activities->numberofharvester = $request->Input('numberofharvester');
        // $activities->rateton = $request->Input('rateton');
        // $activities->datemilled = $request->Input('datemilled');
        // $activities->grosstons = $request->Input('grosstons');
        // $activities->trashpercentage = $request->Input('trashpercentage');
        // $activities->mill = $request->Input('mill');
        // $activities->trashtotal = $request->Input('trashtotal');
        // $activities->nettons = $request->Input('nettons');
        // $activities->sugar = $request->Input('sugar');
        // $activities->molases = $request->Input('molases');
        // $activities->dueharvesters = $request->Input('dueharvesters');
        // $activities->dueperharvesters = $request->Input('dueperharvesters');
        // $activities->duedriver = $request->Input('duedriver');
        // $activities->dueunit = $request->Input('dueunit');
        // $activities->save();

        $harvest = $request->Input('harvestersSelect');
        $str = str_replace('"', '', $harvest);
        $dec = json_decode($str[0]);
        $query = Pivot::whereIn('id', $dec)->where('activities_id', $id)->get();
        foreach ($query as $value) {     
            // $storeHarvester->activities_id = $activities->id;
            // $storeHarvester->week_ending = $request->Input('we');
            // $storeHarvester->harvesters_id = $value->id;
            $storeHarvester->save();      
        }
        

        Alert::success('Activity has been successfully updated!', 'Success!');
        return back()->withInput(); 
    }
}
