<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ActivityWeekending;

class WeekEnding extends Model
{
    protected $fillable = ['weekending'];

    public function activityweekendings(){
        return $this->beloongsTo('App\ActivityWeekending');
    }
}
