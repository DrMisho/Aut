<?php

namespace App\Http\Autocompletes;


use Aut\Autocomplete\Select;
use Aut\GlobalSettings\Models\SocialNetwork;

class SocialNetworkAutocomplete extends Select
{
    protected $model = SocialNetwork::class;

    public function text()
    {
        return 'name';
    }
}