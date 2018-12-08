<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Year;
use App\Club;
use App\Training;
use App\Room;
use App\Intensity;


class Schedule extends Model
{
    protected $table = 'schedules';
    protected $fillable = ['id','clubs_id', 'trainings_id', 'rooms_id', 'intensities_id', 'start_time', 'end_time', 'duration', 'active', 'sort', 'pre_entry', 'paid', 'show_age', 'created_at', 'updated_at'];

    protected $start_date = '';
    protected $time_stamp = '';
    protected $date_stamp = '';
    protected $end_date = '';

    public function years()
    {
        return $this->belongsToMany('App\Year', 'schedule_years', 'schedules_id', 'years_id');
    }

    public function club()
    {
        return $this->belongsTo('App\Club', 'clubs_id', 'id');
    }

    public function training()
    {
        return $this->belongsTo('App\Training', 'trainings_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo('App\Room', 'rooms_id', 'id');
    }

    public function intensity()
    {
        return $this->belongsTo('App\Intensity', 'intensities_id', 'id');
    }

    public function StartDate(){
        if(!$this->start_date){
            $this->start_date = new \DateTime($this->start_time);
        }
        return $this->start_date;
    }

    public function EndDate(){
        if(!$this->end_date){
            $this->end_date = new \DateTime($this->end_time);
        }
        return $this->end_date;
    }

    public function TimeStamp(){
        if(!$this->time_stamp){
            $date = $this->StartDate();
            $this->time_stamp = mktime($date->format('H'), $date->format('i'), 0, 1, 1, 1970);
        }
        return $this->time_stamp;
    }

    public function DateStamp(){
        if(!$this->date_stamp){
            $date = $this->StartDate();
            $this->date_stamp = mktime(0, 0, 0, $date->format('m'), $date->format('d'), $date->format('Y'));
        }
        return $this->date_stamp;
    }
}
