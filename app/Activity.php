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

    // this child node must belong to the parent node using "belongsTo" method.
    public function harvesters(){
        return $this->beloongsTo('App\Harvester');
    }
}
