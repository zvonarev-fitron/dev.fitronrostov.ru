<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Uslugi;

class Fitnes extends Model
{
    protected $table = 'fitnes';

    public function uslugis()
    {
        return $this->hasMany('App\Uslugi', 'fitnes_id', 'id');
    }
}
