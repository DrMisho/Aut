<?php
namespace App\Models;


use Aut\SeoBuilder\Models\Seo;
use App\Models\Client;
use App\Models\Solution;
use App\Models\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
    use Aut\SiteBuilder\Models\Builder;

class SuiteSolution extends Model
{
    use Builder;

    protected $table = 'solution_suite';

    protected $fillable = ['suite_id', 'solution_id', 'show_order'];
    protected $with = ['modules', 'solution'];

    public function solution()
    {
        return $this->belongsTo(Solution::class);
    }

    public function suite()
    {
        return $this->belongsTo(Suite::class);
    }

    public function modules()
    {
        return $this->hasMany(\App\Models\SolutionModule::class, 'solution_suite_id');
    }

}
