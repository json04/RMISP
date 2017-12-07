<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Activity;

class WeekEnding extends Model
{
    protected $fillable = ['activities_id', 'weekending'];

    public function activities()
    {
    	return $this->belongsTo('App\Activity', 'foreign_key');
    }

}
