<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeekEnding extends Model
{
    protected $fillable = ['activities_id', 'weekending'];

    public function activities()
    {
    	return $this->belongsTo('App\Activity', 'foreign_key');
    }

}
