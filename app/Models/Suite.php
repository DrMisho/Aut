<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Aut\SeoBuilder\Models\Seo;
use App\Models\Client;
use App\Models\Solution;
use App\Models\Module;
use App\Models\Translations\SuiteTranslation;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\SiteBuilder\Models\Builder;



class Suite extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;
    use Builder;

    public $translationModel = SuiteTranslation::class;

    public $translatedAttributes = ['name', 'long_name', 'vision'];
    protected $fillable = ['suite_code', 'show_order', 'seo_id'];
    protected $with = ['suiteSolutions'];

    public function seo()
    {
        return $this->morphOne(Seo::class, 'buildable');
    }
    public function solutions()
    {
        return $this->belongsToMany(Solution::class, 'solution_suite', 'suite_id', 'solution_id')->withPivot('show_order');
    }


    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function suiteSolutions()
    {
        return $this->hasMany(SuiteSolution::class);
    }
    
}
