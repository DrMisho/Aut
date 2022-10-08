<?php

namespace Aut\News\Autocompletes;

use Aut\News\Models\News;
use Aut\Autocomplete\Select;

class NewsAutocomplete extends Select
{
    protected $model = News::class;

    public function text()
    {
        return 'title';
    }
}