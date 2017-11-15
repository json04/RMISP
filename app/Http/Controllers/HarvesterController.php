<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harvester;
use App\Activity;
use Input;
use Alert;

class HarvesterController extends Controller
{
    public function create()
    {
    	return view('harvester.create');
    }

    public function store(Request $request)
    {
    	$harvesters = new Harvester;
    	$harvesters->fname = $request->Input('fname');
    	$harvesters->mname = $request->Input('mname');
    	$harvesters->lname = $request->Input('lname');
        $harvesters->suffix = $request->Input('suffix');
    	$harvesters->address = $request->Input('address');
    	$harvesters->contact = $request->Input('contact');
    	$harvesters->save();
        Alert::success('Data successfully added to database!', 'Success!');
    	return back()->withInput(); 
    }
}
