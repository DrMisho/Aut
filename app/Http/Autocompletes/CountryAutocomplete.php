<?php

namespace App\Http\Autocompletes;

use Aut\Autocomplete\Select;
use Aut\GlobalSettings\Models\Country;

class CountryAutocomplete extends Select
{
    protected $model = Country::class;

    public function text()
    {
        return 'name';
    }
}