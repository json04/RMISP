<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ActivityWeekending;

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

    public function activityweekendings(){
        return $this->hasMany('App\ActivityWeekending');
    }
}
