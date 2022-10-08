<?php

namespace App\Http\Controllers;

use App\Http\Resources\ModuleResource;
use App\Models\Solution;
use App\Models\Module;
use App\Models\SolutionModule;
use App\Models\Suite;
use App\Models\SuiteSolution;
use App\Models\Translations\SolutionTranslation;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index(Solution $solution)
    {

        $modules = Module::query()->where('solution_id', '=', $solution->id )->get();
        $modules_collection = ModuleResource::collection($modules);
        //dd($modules);
        return response([
            'modules' => $modules_collection
        ]);
    }


}
