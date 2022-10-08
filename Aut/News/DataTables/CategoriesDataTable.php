<?php

namespace Aut\News\DataTables;

use Aut\News\Models\NewsCategory;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\ColorInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\VueDataTable\ApiResources\VueDataTable;

class CategoriesDataTable extends VueDataTable
{
    use WithTranslation;

    public static $model = NewsCategory::class;

//    public function mapper($request)
//    {
//        return [
//            'id' => $this->id,
//            'name' => $this->name,
//            'color' => $this->color
//        ];
//    }
    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('name')->label(trans('news::news.category_name'))->multiLang(),
            ColorInput::make('color')->label(trans('news::news.category_color')),
        ];
    }

    public static function title()
    {
        return trans('news::news.categories');
    }

    public static function singular()
    {
        return trans('news::news.category');
    }
}
