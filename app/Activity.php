<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\WeekEnding;
use App\Harvester;

class Activity extends Model
{
    protected $fillable = [
    	'week_endings_id', 'unitid', 'groupnumber',
    	'haulton', 'driver', 'block',
    	'numberofharvest', 'rateton', 'datemilled',
    	'grosstons', 'trashpercentage', 'mill',
    	'trashtotal', 'nettons', 'sugar',
    	'molases', 'dueharvesters', 'dueperharvesters',
    	'duedriver', 'dueunit',
    ]; 

    // each activity has many Harvesters
    public function harvesters() {
        return $this->hasMany('App\Harvester');
    }

    //each acitiviy belongs to one weekending 
    // define our pivot table
    public function weekendings() {
        return $this->belongsTo('App\Weekending', 'activity_weekendings', 'activities_id', 'week_endings_id', 'harvesters_id');
    }
}
