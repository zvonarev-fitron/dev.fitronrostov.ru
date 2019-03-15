<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Club;

class PriceClubs extends Model
{
    protected $table = 'price_clubs';
    protected $fillable = ['club_id', 'name', 'price', 'level_ps', 'ps'];

    public function club()
    {
        return $this->belongsTo('App\Club', 'club_id', 'id');
    }
}
