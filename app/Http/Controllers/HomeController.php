<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harvester;
use App\Activity;
use App\HarvesterActivity;

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
        return view('home', compact('harvesters', 'activities'));
    }

    public function retrieve($id)
    {
        $activities = Activity::findOrFail($id);
        return view('search.view-activity-results', compact('activities'));
    }
}
