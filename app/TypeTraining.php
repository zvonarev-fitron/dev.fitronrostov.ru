<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class TypeTraining extends Model
{
    protected $table = 'type_trainings';

    public function categories()
    {
        return $this->hasMany('App\Category', 'type_training_id', 'id');
    }
}
