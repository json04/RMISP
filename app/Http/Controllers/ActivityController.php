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

    public function getHarvester(Request $request)
    {
        // dd($request->all());
        $columns = array(
            0 => 'id',
            1 => 'lname',
            2 => 'fname',
            3 => 'suffix'
        );

        $totalData = Harvester::count();
        $limit = $request->Input('length');
        $start = $request->Input('start');
        $order = $columns[$request->Input('order.0.column')];
        $dir = $request->Input('order.0.dir');

        if (empty($request->Input('search.value'))) {
            $posts = Harvester::offset($start)->limit($limit)->orderBy($order, $dir)->get();   
            $totalFiltered = Harvester::count();
        }else{
            $search = $request->Input('search.value');
            $posts = Harvester::where('lname', 'like', "%{$search}%")
                                ->orWhere('fname', 'like', "%{$search}%")
                                ->offset($start)
                                ->limit($limit)
                                ->orderBy($order, $dir)
                                ->get();
            $totalFiltered = Harvester::where('lname', 'like', "%{$search}%")
                                ->orWhere('fname', 'like', "%{$search}%")
                                ->count();
        }

        $data = array();

        if ($posts) {
            foreach ($posts as $value) {
                $nestedData['id'] = $value->id;
                $nestedData['lname'] = $value->lname;
                $nestedData['fname'] = $value->fname;
                $nestedData['suffix'] = $value->suffix;
                $data[] = $nestedData;
            }
        }
        $json_data = array(
            "draw"          => intval($request->Input('draw')),
            "recordsTotal"  => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"          => $data
        );
        echo json_encode($json_data);
    }
    
    public function store(Request $request)
    {
    
        $activity = new Activity;
        $activity->reference = $request->Input('reference');
        $activity->dateloaded = $request->Input('dateloaded');
        $activity->week_ending = $request->Input('we');
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

        // $we = new WeekEnding;
        // $we->weekending = $request->Input('we');
        // $we->save();

        $harvest = $request->Input('harvestersSelect');
        $str = str_replace('"', '', $harvest);
        $dec = json_decode($str[0]);
    
        foreach ($dec as $value) {     
            $storeHarvester = new Pivot;       
            $storeHarvester->activities_id = $activity->id;
            $storeHarvester->week_ending = $request->Input('we');
            $storeHarvester->harvesters_id = $value;
            $storeHarvester->save();      
        }
        

        Alert::success('Data has been successfully added to database!', 'Success!');
        return back()->withInput(); 
    }
}
