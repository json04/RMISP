<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function harvesteractivities() 
    {
    	return $this->hasMany('App\HarvesterActivity');
    }

    public function weekendings()
    {
        return $this->hasMany('App\WeekEnding');
    }

}
