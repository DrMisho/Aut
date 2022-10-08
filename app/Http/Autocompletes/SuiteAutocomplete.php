<?php

namespace App\Http\Autocompletes;

use App\Models\Suite;
use Aut\Autocomplete\Select;

class SuiteAutocomplete extends Select
{
    protected $model = Suite::class;

    public function text()
    {
        return 'name';
    }
}