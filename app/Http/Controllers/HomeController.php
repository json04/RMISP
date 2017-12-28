<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harvester;
use App\Activity;
use App\Activity_Harvester_WeekEnding as Pivot;
use App\WeekEnding;
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
        $weekendings = WeekEnding::findOrFail($id);
        $weekendings->activitiesHarvestersWeekendings()->where('id', $id)->get();
        $activities->activitiesHarvestersWeekendings()->where('id', $id)->get();
        return view('search.view-activity-results', compact('activities', 'weekendings'));
    }
}
