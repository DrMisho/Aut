<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{

    public function index()
    {
        return response([
            'solution' => Solution::all()
        ]);
    }

    public function create(Request $request)
    {
        $attributes = request()->validate([
            'ar.name' => 'required',
            'en.name' => 'required',
            'solution_code' => 'required|string|max:3'
        ]);

        $suites_requested = request('solution_suite');

        $solution = Solution::create($request->input());

        foreach($suites_requested as $suite) {
            //return $suite['order'];
            if($suite['enabled'])
            {
                $solution->suites()->attach($suite['id'], [
                    'show_order' => $suite['show_order']
                ]);
            }
        }
        return response([
            'success' => 'Added successfully'
        ]);
    }

    public function update(Solution $solution)
    {
        $attributes = request()->validate([
            'ar.name' => 'required',
            'en.name' => 'required',
            'solution_code' => 'required|string|max:3'
        ]);
        $suites_requested = request('solution_suite');

        $solution->update(request()->input());
    
        foreach($suites_requested as $suite) {
            //return $suite['order']
            if($suite['enabled'])
            {
                if($solution->suites()->where('suite_id', $suite['id'] )->exists())
                {
                    $solution->suites()->updateExistingPivot($suite['id'], ['show_order' => $suite['show_order']]);

                }
                else
                {
                    $solution->suites()->attach($suite['id'], ['show_order' => $suite['show_order'] ]);
                }

            }
            else
            {
                $solution->suites()->detach($suite['id']);
            }


        }

        return response([
            'success' => 'Updated successfully'
        ]);
    }

    public function destroy(Solution $solution)
    {

        //$solution->suites->detach();

        $st = $solution->delete();
        $modules = Module::where('solution_id', $solution->id)->get();
        foreach ($modules as $module)
        {
            $module->delete();
        }

        return response([
            'success' => 'Deleted Successfully',
        ]);
    }

}
