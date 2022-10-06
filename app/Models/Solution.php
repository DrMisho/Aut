<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Translations\SolutionTranslation;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Module;
use Aut\SiteBuilder\Models\Builder;



class Solution extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;
    use Builder;

    public $translationModel = SolutionTranslation::class;

    public $translatedAttributes = ['name'];
    protected $fillable = ['solution_code'];
    //protected $with = ['modules'];

    
    public function suites()
    {
        return $this->belongsToMany(Suite::class, 'solution_suite')->withPivot('show_order');
    }
    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function suiteSolutions()
    {
        return $this->hasMany(SuiteSolution::class);
    }


}
