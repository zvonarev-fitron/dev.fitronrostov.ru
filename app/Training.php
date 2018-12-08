<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\TypeTraining;
use App\Year;
use App\Schedule;

class Training extends Model
{
    protected $table = 'trainings';
    protected $fillable = ['category_id', 'year_id', 'type_training_id', 'sort', 'name', 'min_time', 'max_time', 'url', 'image', 'seo_h1', 'seo_title', 'seo_keywords', 'seo_description', 'preview', 'description'];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function type_trining()
    {
        return $this->belongsTo('App\TypeTraining', 'type_training_id', 'id');
    }

    public function years()
    {
        return $this->belongsToMany('App\Year', 'training_years', 'training_id', 'year_id');
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule', 'trainings_id', 'id');
    }
}
