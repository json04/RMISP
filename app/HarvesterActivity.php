<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Harvester;
use App\Activity;

class HarvesterActivity extends Model
{
    protected $fillable = ['harvesters_id', 'harvester_activities_id', 'weekending'];

    public function activities()
    {
    	return $this->belongsTo('App\Activity');
    }

    public function harvesters()
    {
    	return $this->hasMany('App\Harvester', 'foreign_key');
    }
}
