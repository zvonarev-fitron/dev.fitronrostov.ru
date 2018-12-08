<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Club;
use App\TypeTrainer;

class Trainer extends Model
{
    protected $table = 'trainers';
    protected $fillable = ['type_trainers_id', 'clubs_id', 'active', 'name', 'code', 'picture', 'image', 'youtube', 'seo_h1', 'seo_title', 'seo_keywords', 'seo_descroption', 'description'];

    public function club()
    {
        return $this->belongsTo('App\Club', 'clubs_id', 'id');
    }

    public function type_trainer()
    {
        return $this->belongsTo('App\TypeTrainer', 'type_trainers_id', 'id');
    }
}
