<?php

namespace Aut\News\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\News\Models\Translations\NewsTypeTranslation;

class NewsType extends Model
{
    use SoftDeletes, Translatable;

    public $translationModel = NewsTypeTranslation::class;
    public $translatedAttributes = ['name'];

    protected $fillable = ['category_id'];

    public function category()
    {
        return $this->belongsTo(NewsCategory::class);
    }
}
