<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Training;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'short', 'image', 'sort', 'url', 'description', 'seo_h1', 'seo_title', 'seo_keywords', 'seo_description'];

    public function trainings()
    {
        return $this->hasMany('App\Training', 'category_id', 'id');
    }
}
