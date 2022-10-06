<?php

namespace Aut\News\Autocompletes;

use Aut\News\Models\NewsStatus;
use Aut\Autocomplete\Select;

class StatusAutocomplete extends Select
{
    protected $model = NewsStatus::class;

    public function text()
    {
        return 'name';
    }
}