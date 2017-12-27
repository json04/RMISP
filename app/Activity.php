<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Activity_Harvester_WeekEnding;


class Activity extends Model
{
    protected $fillable = [
    	'reference', 'dateloaded', 'sdt', 
    	'unitid', 'groupnumber',
    	'haulton', 'driver', 'block',
    	'numberofharvest', 'rateton', 'datemilled',
    	'grosstons', 'trashpercentage', 'mill',
    	'trashtotal', 'nettons', 'sugar',
    	'molases', 'dueharvesters', 'dueperharvesters',
    	'duedriver', 'dueunit',
    ]; 

    public function activitiesHarvestersWeekendings(){
        return $this->belongsTo('App\Activity_Harvester_WeekEnding');
    }
}
