<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HarvesterActivity extends Model
{
    protected $fillable = ['harvesters_id', 'harvester_activities_id', 'weekending'];

    public function activities()
    {
    	return $this->belongsTo('App\Activity');
    }

    public function harvesters()
    {
    	return $this->belongsTo('App\Harvester');
    }
}
