<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\HarvesterActivity;

class Harvester extends Model
{
    protected $fillable = [
        'fname', 'mname', 'lname', 'suffix', 'address', 'contact',
    ];

    public function harvesteractivities()
    {
    	return $this->hasOne('App\HarvesterActivity', 'foreign_key');
    }
}
