<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Aut\SeoBuilder\Models\Seo;
use App\Models\Translations\PageTranslation;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\SiteBuilder\Models\Builder;



class Page extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;
    use Builder;

    public $translationModel = PageTranslation::class;

    public $translatedAttributes = ['subtitle', 'content'];
    protected $fillable = ['page_name', 'seo_id'];


    public function seo()
    {
        return $this->morphOne(Seo::class, 'buildable');
    }

}