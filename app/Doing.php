<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doing extends Model
{
    protected $table = 'doings';
    protected $fillable = ['sort', 'active', 'name', 'url', 'title', 'subtitle', 'image', 'start_date', 'end_date', 'preview', 'description'];

    //
}
