<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Translations\ModuleTranslation;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Solution;
use Aut\SiteBuilder\Models\Builder;


class Module extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;
    use Builder;

    public $translationModel = ModuleTranslation::class;


    public $translatedAttributes = ['name', 'description'];
    protected $fillable = ['module_code', 'solution_id', 'show_order'];

    public function solution()
    {
        return $this->belongsTo(Solution::class);
    }
    public function suiteSolutions()
    {
        return $this->belongsToMany(SuiteSolution::class , 'solution_module');
    }

}
