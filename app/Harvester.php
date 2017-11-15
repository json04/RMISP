<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harvester extends Model
{
    protected $fillable = [
        'fname', 'mname', 'lname', 'suffix', 'address', 'contact',
    ];

    public function harvesteractivities()
    {
    	return $this->hasMany('App\HarvesterActivity');
    }
}
