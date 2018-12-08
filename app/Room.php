<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Club;
use App\Schedule;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = ['clubs_id', 'name'];

    public function club()
    {
        return $this->belongsTo('App\Club', 'clubs_id', 'id');
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule', 'rooms_id', 'id');
    }
}
