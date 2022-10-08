<?php

namespace App\Http\Autocompletes;


use Aut\GlobalSettings\Models\JobTitle;
use Aut\Autocomplete\Select;

class JobTitleAutocomplete extends Select
{
    protected $model = JobTitle::class;

    public function text()
    {
        return 'name';
    }
}