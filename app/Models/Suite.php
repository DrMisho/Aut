<?php

namespace App\Models;

use App\Http\FileUploader\SuiteImageUpload;
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
use Aut\FileUpload\Traits\FileUpload;



class Suite extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;
    use Builder;
    use FileUpload;

    public $translationModel = SuiteTranslation::class;

    public $translatedAttributes = ['name', 'long_name', 'vision'];
    protected $fillable = ['suite_code', 'show_order', 'seo_id', 'image_id'];
    protected $with = ['suiteSolutions'];
    protected $appends = ['image_path'];

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

    public function image()
    {
        return $this->fileRelation(SuiteImageUpload::class, 'image_id');
    }

    public function getImagePathAttribute()
    {
        return $this->getFilePath(SuiteImageUpload::class);
    }
    
}
