<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Activity_Harvester_WeekEnding;

class Harvester extends Model
{
    protected $fillable = [
        'fname', 'mname', 'lname', 'suffix', 'address', 'contact',
    ];

    public function activitiesHarvestersWeekendings(){
        return $this->belongsTo('App\Activity_Harvester_WeekEnding');
    }
}
