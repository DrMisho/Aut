<?php

namespace Aut\News\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\News\Models\Translations\NewsCategoryTranslation;

class NewsCategory extends Model
{
    use SoftDeletes, Translatable;

    public $translationModel = NewsCategoryTranslation::class;
    public $translatedAttributes = ['name'];

    protected $fillable = ['color'];

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function types()
    {
        return $this->hasMany(NewsType::class);
    }
}
