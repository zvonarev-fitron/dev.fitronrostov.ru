<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingYear extends Model
{
    protected $table = 'training_years';
    protected $fillable = ['training_id', 'year_id'];
}
