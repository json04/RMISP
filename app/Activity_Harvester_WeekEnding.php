<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Activity;
use App\Harvester;
use App\WeekEnding;

class Activity_Harvester_WeekEnding extends Model
{
    protected $fillable = [
        'activities_id', 'harvesters_id', 'week_endings_id'
    ];

    public function activities(){
    	return $this->hasMany('App\Activity', 'activity__harvester__week_endings_id');
    }

    public function harvesters(){
    	return $this->hasMany('App\Harvester', 'activity__harvester__week_endings_id');
    }

    public function weekendings(){
    	return $this->hasMany('App\WeekEnding', 'activity__harvester__week_endings_id');
    }
}
