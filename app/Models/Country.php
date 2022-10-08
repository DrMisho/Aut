<?php


namespace App\Models;

use App\Models\Client;
use Aut\GlobalSettings\Models\Country as AutCountry;


class Country extends AutCountry
{
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}