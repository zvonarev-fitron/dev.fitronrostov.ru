<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Club;

class Infrastructure extends Model
{
    protected $table = 'infrastructures';
    protected $fillable = ['club_id', 'sort', 'active', 'image', 'text'];

    public function club()
    {
        return $this->belongsTo('App\Club', 'club_id', 'id');
    }
}
