<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Trainer;

class TypeTrainer extends Model
{
    protected $table = 'type_trainers';
    protected $fillable = ['name', 'code', 'seo_h1', 'seo_title', 'seo_keywords', 'seo_description'];

    public function trainers()
    {
        $this->hasMany('App\Trainer', 'type_trainers_id', 'id');
    }
}
