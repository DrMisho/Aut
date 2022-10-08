<?php

namespace Aut\Cake\Controllers;

use Aut\Cake\Models\Cake;
use App\Http\Controllers\Controller;
use Aut\Cake\ApiResources\Cakes;
use Illuminate\Support\Str;


class CakeController extends Controller
{

    public function index()
    {
        return Cakes::collection(Cake::query()->get());
    }

    public function menu()
    {
        return response([
            'cakes' => Cake::latest()->paginate()->withQueryString()
        ]);

    }
    public function edit($id)
    {
        return request();
        $attributes = request()->validate([
            'cake_name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $attributes['slug'] = Str::slug(request('cake_name'), '-');
        Cake::where('id', '=', $id)->update($attributes);

        return response([
            'cakes' => Cake::sortBy(request('sortBy'))->orderBy('sortType')->paginate()->withQueryString()
        ]);
    }

    public function destroy($id)
    {
        Cake::where('id', '=', $id)->delete();
        return response([
            'cakes' => Cake::latest()->paginate()->withQueryString()
        ]);

    }

    public function create()
    {
        $attributes = request()->validate([
            'cake_name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $attributes['slug'] = Str::slug(request('cake_name'), '-');

        Cake::create($attributes);

        return response([
            'cakes' => Cake::latest()->paginate()->withQueryString()
        ]);

    }
    
}
