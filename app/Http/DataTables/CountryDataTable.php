<?php

namespace App\Http\DataTables;


use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\GlobalSettings\Models\Country;


class CountryDataTable extends VueDataTable
{
    use WithTranslation;

    public static $model = Country::class;


    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'country_code_3' => $this->country_code_3,
            'name' => $this->name,
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('country_code_3')->label(trans('country.country_code_3')),
            TextInput::make('name')->label(trans('country.name'))->multiLang(),
        ];
    }

    public static function title()
    {
        return trans('country.countries');
    }

    public static function singular()
    {
        return trans('country.country_singular');
    }
}
