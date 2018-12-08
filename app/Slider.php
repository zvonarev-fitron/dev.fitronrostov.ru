<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class Slider extends Model
{
    protected $table = 'sliders';
    protected $fillable = ['name', 'code'];

    public function images()
    {
        return $this->hasMany('App\Image', 'slider_id', 'id');
    }
}
