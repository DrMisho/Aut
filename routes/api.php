<?php

use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SolutionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuiteController;
use App\Http\Controllers\TeamController;
use Aut\GlobalSettings\Models\SocialNetwork;
use Aut\GlobalSettings\Models\JobTitle;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('test', function () {
    return \App\Http\Resources\Users::collection(\App\Models\User::all());
});

Route::get('/suite', [SuiteController::class, 'index']);
Route::post('/suite', [SuiteController::class, 'create']);
Route::patch('/suite/{suite}', [SuiteController::class, 'update']);
Route::delete('suite/{suite}', [SuiteController::class, 'destroy']);

Route::get('/solution', [SolutionController::class, 'index']);
Route::patch('/solution/{solution}', [SolutionController::class, 'update']);
Route::post('/solution', [SolutionController::class, 'create']);
Route::delete('/solution/{solution}', [SolutionController::class, 'destroy']);

Route::get('/social', function() {
    return response([
        'socials' => SocialNetwork::all()
    ]);
});

Route::get('/jobTitle', function() {
    return response([
        'jobs' => JobTitle::all()
    ]);
});

Route::post('/team', [TeamController::class, 'create']);
Route::patch('/team/{team}', [TeamController::class, 'update']);
Route::delete('/team/{team}', [TeamController::class, 'destroy']);


Route::get('/module/{solution}', [ModuleController::class, 'index']);


Route::get('/module_solution/{suite}', function (\App\Models\Suite $suite) {
    $solutions_suite = $suite->suiteSolutions()->get();

    $solution_ids = $solutions_suite->pluck('solution_id');

    $solutions = \App\Models\Solution::query()->whereIn('id', $solution_ids)->get();

    $module_ids = \App\Models\SolutionModule::query()
        ->whereIn('solution_suite_id', $solutions_suite->pluck('id'))
        ->get()->pluck('module_id');

    $modules = \App\Models\Module::query()->whereIn('id', $module_ids)->get();

    return response([
        'modules' => $modules,
        'solutions' => $solutions,
        'solution_ids' => $solution_ids,
        'module_ids' => $module_ids
    ]);

});