<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harvester extends Model
{
    protected $fillable = [
        'fname', 'mname', 'lname', 'address', 'contact',
    ];

    public function HarvesterActivity()
    {
    	return $this->hasMany('App\HarvesterActivity');
    }
}
