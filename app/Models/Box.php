<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Translations\BoxTranslation;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\SiteBuilder\Models\Builder;


class Box extends Model implements TranslatableContract
{
    use Builder;
    use Translatable;
    use SoftDeletes;
    public $translationModel = BoxTranslation::class;

    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['code', 'show_order'];
}
