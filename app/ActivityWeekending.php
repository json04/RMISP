<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Activity;
// use App\WeekEnding;
use App\Harvester;

class ActivityWeekending extends Model
{
    protected $fillable = [
    	'activities_id', 'week_ending', 'harvesters_id'
    ]; 

    // public function weekendings(){
    // 	return $this->hasMany('App\WeekEnding');
    // }

    public function activities(){
    	return $this->belongsTo('App\Activity', 'activities_id');
    }

    public function harvesters(){
    	return $this->belongsTo('App\Harvester', 'harvesters_id');
    }

}
