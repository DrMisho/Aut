<?php

namespace Aut\News\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\News\Models\Translations\NewsStatusTranslation;

class NewsStatus extends Model
{
    use SoftDeletes, Translatable;

    public $translationModel = NewsStatusTranslation::class;
    public $translatedAttributes = ['name'];

    protected $fillable = ['code'];
}
