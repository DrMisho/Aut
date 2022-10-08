<?php

namespace App\Models;

use Aut\News\Models\News as Model;
use Aut\GlobalSettings\Models\City;
use Aut\SeoBuilder\Models\Seo;

class News extends Model
{
    protected $guarded = [];
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function seo()
    {
        return $this->morphOne(Seo::class, 'buildable');
    }

}