<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Training;
//use App\TrainingYear;
use App\Schedule;
//use App\ScheduleYear;

class Year extends Model
{
    protected $table = 'years';

    public function trainings()
    {
        return $this->belongsToMany('App\Training', 'training_years', 'year_id', 'training_id');
    }

    public function schedules()
    {
        return $this->belongsToMany('App\Schedule', 'schedule_years', 'years_id', 'schedules_id');
    }
}
