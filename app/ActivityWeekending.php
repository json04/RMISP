<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityWeekending extends Model
{
    protected $fillable = [
    	'activities_id', 'week_endings_id', 'harvesters_id'
    ]; 

    public function harvesters(){
        return $this->beloongsTo('App\Harvester');
    }
}
