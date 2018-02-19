<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Activity;

class WeekEnding extends Model
{
    protected $fillable = ['weekending'];

    public function harvesters(){
        return $this->beloongsTo('App\Harvester');
    }
}
