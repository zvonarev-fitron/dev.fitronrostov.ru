<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Special;

class TypeCard extends Model
{
    protected $table = 'type_cards';
    protected $fillable = ['name'];

    public function Special()
    {
        return $this->hasMany('App\Special', 'type_card_id', 'id');
    }
}
