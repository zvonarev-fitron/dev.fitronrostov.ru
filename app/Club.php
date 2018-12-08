<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Infrastructure;
use App\Trainer;
use App\Room;
use App\Schedule;

class Club extends Model
{
    protected $table = 'clubs';
    protected $fillable = ['code', 'name', 'address', 'phone', 'map_x', 'map_y'];

    public function infrastructures()
    {
        return $this->hasMany('App\Infrastructure', 'club_id', 'id');
    }

    public function trainers()
    {
        return $this->hasMany('App\Trainer', 'clubs_id', 'id');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room', 'clubs_id', 'id');
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule', 'clubs_id', 'id');
    }
}
