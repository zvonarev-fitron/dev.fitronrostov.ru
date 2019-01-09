<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TypeCard;

class Special extends Model
{
    protected $table = 'special';
    protected $fillable = ['name', 'description', 'price_1', 'price_2', 'start_active', 'end_active', 'active', 'rassrochka', 'type_card_id'];

    public function type_card()
    {
        return $this->belongsTo('App\TypeCard', 'type_card_id', 'id');
    }
}
