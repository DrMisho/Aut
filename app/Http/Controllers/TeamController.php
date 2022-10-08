<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Aut\GlobalSettings\Models\Translations\JobTitleTranslation;

class TeamController extends Controller
{
    public function create(Request $request)
    {

        $this->validate($request, [
            'ar.name' => 'required',
            'en.name' => 'required',
            'show_order' => 'required|integer',
            'tags' => 'required',
            'job_title' => 'required',
        ]);

        $request->merge([
            'job_title_id' => JobTitleTranslation::where('name', '=', $request->input('job_title'))->first('job_title_id')->job_title_id
        ]);

        $team = Team::create($request->input());

        foreach($request->input('social') as $social)
        {
            $team->socialNetworks()->attach($social['id'], [
                'account' => $social['account']
            ]);
        }
        return response([
            'success' => 'Added successfully'
        ]);
    }

    public function update(Request $request, Team $team)
    {

        $this->validate($request, [
            'ar.name' => 'required',
            'en.name' => 'required',
            'show_order' => 'required|integer',
            'tags' => 'required',
            'job_title' => 'required',
        ]);

        $team->update($request->input());

        foreach($request->input('social') as $social)
        {
            if($social['enabled'])
            {
                $team->socialNetworks()->detach($social['id']);
                $team->socialNetworks()->attach($social['id'], ['account' => $social['account']]);
            }
            else
            {
                $team->socialNetworks()->detach($social['id']);
            }

        }
        return response([
            'success' => 'Updated successfully'
        ]);
    }

    public function destroy(Team $team)
    {

        $team->socialNetworks()->detach();

        $st = $team->delete();

        return response([
            'success' => 'Deleted Successfully',
        ]);
    }
}
