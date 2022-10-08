<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Aut\SiteBuilder\Models\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class SolutionModule extends Model
{

    use Builder;

    protected $fillable = ['solution_suite_id', 'module_id'];
    protected $table = 'solution_module';
    protected $with = ['module'];


    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function suiteSolutions()
    {
        return $this->belongsTo(SuiteSolution::class);
    }

}
