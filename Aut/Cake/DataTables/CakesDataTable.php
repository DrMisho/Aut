<?php

namespace Aut\Cake\DataTables;

use Aut\Cake\Models\Cake;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\ColorInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\VueDataTable\ApiResources\VueDataTable;

class CakesDataTable extends VueDataTable
{
    public static $model = Cake::class;

    // protected static $defaultAddAction = false;


    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('cake_name')->label(trans('cakes::cakes.cake_name')),
            TextInput::make('price')->label(trans('cakes::cakes.price')),
            TextInput::make('description')->label(trans('cakes::cakes.description')),
        ];
    }

    public static function title()
    {
        return trans('cakes::cakes.cake_table');
    }

    public static function singular()
    {
        return trans('cakes::cakes.cake_name_singular');
    }

}