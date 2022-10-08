<?php

namespace Aut\News\Autocompletes;

use Aut\Autocomplete\Select;
use Aut\News\Models\NewsCategory;

class CategoryAutocomplete extends Select
{
    protected $model = NewsCategory::class;

    public function text()
    {
        return 'name';
    }
}