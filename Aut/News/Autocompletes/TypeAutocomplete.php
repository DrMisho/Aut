<?php

namespace Aut\News\Autocompletes;

use Aut\News\Models\NewsType;
use Aut\Autocomplete\Select;

class TypeAutocomplete extends Select
{
    protected $model = NewsType::class;

    public function text()
    {
        return 'name';
    }
}