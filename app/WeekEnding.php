<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Activity_Harvester_WeekEnding;

class WeekEnding extends Model
{
    protected $fillable = ['weekending'];

    public function activitiesHarvestersWeekendings(){
        return $this->belongsTo('App\Activity_Harvester_WeekEnding');
    }
}
