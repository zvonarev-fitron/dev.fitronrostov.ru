<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schedule;

class ScheduleYear extends Model
{
    protected $table = 'schedule_years';
    protected $fillable = ['years_id', 'schedules_id'];

    public function schedule()
    {
        return $this->belongsTo('App\Schedule', 'schedules_id', 'id');
    }
}
