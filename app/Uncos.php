<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uncos extends Model
{
    protected $table = 'news';
    protected $fillable = ['active', 'sort', 'title', 'preview', 'description', 'date', 'code', 'seo_h1', 'seo_title', 'seo_keywords', 'seo_description'];
}
