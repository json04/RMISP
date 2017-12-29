<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Activity;

class Harvester extends Model
{
    protected $fillable = [
        'fname', 'mname', 'lname', 'suffix', 'address', 'contact',
    ];

    // each harvester belongs to activity
    public function activities() {
    	return $this->belongsTo('App\Activity');
    }
}
