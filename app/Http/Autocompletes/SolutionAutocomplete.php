<?php

namespace App\Http\Autocompletes;


use App\Models\Solution;
use Aut\Autocomplete\Select;

class SolutionAutocomplete extends Select
{
    protected $model = Solution::class;

    public function text()
    {
        return 'name';
    }
}