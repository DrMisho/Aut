<?php

namespace App\Http\Autocompletes;

use App\Models\Team;
use Aut\Autocomplete\Select;

class TeamAutocomplete extends Select
{
    protected $model = Team::class;

    public function text()
    {
        return 'name';
    }
}