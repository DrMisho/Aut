<?php

namespace App\Http\DataTables;


use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\GlobalSettings\Models\City;


class CityDataTable extends VueDataTable
{
    use WithTranslation;

    public static $model = City::class;


    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'city_code' => $this->city_code,
            'name' => $this->name,
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('city_code')->label(trans('city.city_code')),
            TextInput::make('name')->label(trans('city.name'))->multiLang(),
        ];
    }

    public static function title()
    {
        return trans('city.cities');
    }

    public static function singular()
    {
        return trans('city.city_singular');
    }
}
