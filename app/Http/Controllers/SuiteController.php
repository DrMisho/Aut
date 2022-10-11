<?php

namespace App\Http\Controllers;


use App\Models\Module;
use App\Models\SolutionModule;
use App\Models\Suite;
use App\Models\SuiteSolution;

class SuiteController extends Controller
{
    public function index()
    {
        return response([
            'suites' => Suite::all()
        ]);
    }
    public function create()
    {
        $attributes = request()->validate([
            'en.name' => 'required|string',
            'ar.name' => 'required|string',
            'en.long_name' => 'required|string',
            'ar.long_name' => 'required|string',
            'en.vision' => 'required|string',
            'ar.vision' => 'required|string',
            'show_order' => 'required|integer',
            'suite_code' => 'required',
            'image_id' => 'required',
        ]);
        $suite = Suite::create($attributes);

        foreach (request('solutions') as $solution)
        {

            $solution_query = SuiteSolution::create([
                'solution_id' => $solution,
                'suite_id' => $suite->id,
                'show_order' => '0',
            ]);

            $modules = Module::query()->whereIn('id', request('modules'),)
                ->where('solution_id', '=', $solution)->get();


            foreach ($modules as $module)
            {
                SolutionModule::create([
                    'solution_suite_id' => $solution_query->id,
                    'module_id' => $module->id,
                ]);
            }
        }

        return response([
            'success' => 'Added successfully'
        ]);
    }

    public function update(Suite $suite)
    {
        $attributes = request()->validate([
            'en.name' => 'required|string',
            'ar.name' => 'required|string',
            'en.long_name' => 'required|string',
            'ar.long_name' => 'required|string',
            'en.vision' => 'required|string',
            'ar.vision' => 'required|string',
            'show_order' => 'required|integer',
            'suite_code' => 'required',
            'image_id' => 'required',
        ]);
        $suite->update($attributes);

        // Exists in table but not in the request --> delete

        $not_wanted = SuiteSolution::query()
            ->whereNotIn('solution_id', request('solutions'))
            ->where('suite_id', '=', $suite->id);
        SolutionModule::query()->whereIn('solution_suite_id', $not_wanted->get()->pluck('id'))
            ->delete();

        $not_wanted->delete();

        foreach (request('solutions') as $solution)
        {

            $result = SuiteSolution::query()->where('solution_id', '=', $solution)
                            ->where('suite_id', $suite->id)->exists();
            // Exists in the table and in request
            if($result)
            {
                $solution_query = SuiteSolution::query()->where('solution_id', '=', $solution)
                    ->where('suite_id', '=', $suite->id)->first();
            }

            // not Exist in table but exist in request --> create
            else
            {
                $solution_query = SuiteSolution::create([
                    'solution_id' => $solution,
                    'suite_id' => $suite->id,
                    'show_order' => '0',
                ]);
            }


            $modules = Module::query()->whereIn('id', request('modules'),)
                ->where('solution_id', '=', $solution)->get();

            SolutionModule::query()->whereNotIn('module_id', request('modules'))
            ->where('solution_suite_id', '=', $solution_query->id)->delete();

            foreach ($modules as $module)
            {
                $exists = SolutionModule::query()
                    ->where('solution_suite_id', $solution_query->id)
                    ->where('module_id', $module->id)
                    ->doesntExist();
                if($exists)
                {
                    SolutionModule::create([
                        'solution_suite_id' => $solution_query->id,
                        'module_id' => $module->id,
                    ]);
                }
            }
        }

        return response([
            'success' => 'Updated successfully'
        ]);
    }

    public function destroy(Suite $suite)
    {
        $solutions = SuiteSolution::query()->where('suite_id', '=', $suite->id)->get();
        foreach ($solutions as $solution)
        {
            SolutionModule::query()->where('solution_suite_id', '=', $solution->id)->delete();
            $solution->delete();
        }

        $suite->delete();

        return response([
            'success' => 'Deleted Successfully'
        ]);
    }
    

    
}
