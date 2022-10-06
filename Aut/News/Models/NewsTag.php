<?php

namespace Aut\News\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\News\Models\Translations\NewsTagTranslation;

class NewsTag extends Model
{
    use SoftDeletes, Translatable;

    public $translationModel = NewsTagTranslation::class;
    public $translatedAttributes = ['name'];

    protected $fillable = ['id'];

    public function news()
    {
        return $this->belongsToMany(News::class, 'news_tag');
    }
}
