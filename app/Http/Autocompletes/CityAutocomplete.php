<?php

namespace App\Http\Autocompletes;

use Aut\Autocomplete\Select;
use Aut\GlobalSettings\Models\City;

class CityAutocomplete extends Select
{
    protected $model = City::class;

    public function text()
    {
        return 'name';
    }
}