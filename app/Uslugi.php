<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Fitnes;

class Uslugi extends Model
{
    protected $table = 'uslugis';

    public function fitnes()
    {
        return $this->belongsTo('App\Fitnes', 'fitnes_id', 'id');
    }
}
