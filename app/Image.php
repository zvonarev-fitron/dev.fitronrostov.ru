<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Slider;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = ['slider_id', 'image', 'url', 'title', 'text', 'active', 'sort', 'start_time', 'end_time'];

    public function slider()
    {
        return $this->belongsTo('App\Slider', 'slider_id', 'id');
    }
}
