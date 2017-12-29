<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Activity;

class WeekEnding extends Model
{
    protected $fillable = ['weekending'];

    //each weekending has many activities 
    //define pivot table
    public function activities() {
    	return $this->hasMany('App\Activity', 'activity_weekendings', 'week_endings_id', 'activities_id', 'harvesters_id');
    }
}
