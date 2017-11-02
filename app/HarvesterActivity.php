<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HarvesterActivity extends Model
{
    protected $fillable = ['harvesters_id', 'harvester_activities_id'];

    public function activities()
    {
    	return $this->hasOne('App\Activity');
    }

    public function Harvester()
    {
    	return $this->hasMany('App\Harvester');
    }
}
