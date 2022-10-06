<?php

namespace Aut\News\Autocompletes;

use Aut\News\Models\NewsTag;
use Aut\Autocomplete\Select;

class TagsAutocomplete extends Select
{
    protected $model = NewsTag::class;

    public function text()
    {
        return 'name';
    }
}