<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ActivityWeekending;

class Harvester extends Model
{
    protected $fillable = [
        'fname', 'mname', 'lname', 'suffix', 'address', 'contact',
    ];

    //Harvester is the Parent among nodes. Therefore all child nodes must be connected to this Model.
    public function activityweekendings(){
        return $this->hasMany('App\ActivityWeekending');
    }
}
