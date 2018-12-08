<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schedule;

class Intensity extends Model
{
    protected $table = 'intensities';

    public function schedules()
    {
        return $this->hasMany('App\Schedule', 'intensities_id', 'id');
    }
}
