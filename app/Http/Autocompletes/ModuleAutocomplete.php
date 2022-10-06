<?php

namespace App\Http\Autocompletes;


use App\Models\Module;
use Aut\Autocomplete\Select;

class ModuleAutocomplete extends Select
{
    protected $model = Module::class;

    public function text()
    {
        return 'name';
    }
}