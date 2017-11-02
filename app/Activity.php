<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
    	'reference', 'dateloaded', 'sdt', 
    	'unitid', 'weekending', 'groupnumber',
    	'haulton', 'driver', 'block',
    	'numberofharvest', 'rateton', 'datemilled',
    	'grosstons', 'trashpercentage', 'mill',
    	'trashtotal', 'nettons', 'sugar',
    	'molases', 'dueharvesters', 'dueperharvesters',
    	'duedriver', 'dueunit',
    ]; 

    public function HarvesterActivity() 
    {
    	return $this->hasMany('App\HarvesterActivity');
    }
}
