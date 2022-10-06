<?php

namespace Aut\News\DataTables;

use Aut\News\Models\NewsTag;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\ColorInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\VueDataTable\ApiResources\VueDataTable;

class TagsDataTable extends VueDataTable
{
    use WithTranslation;

    public static $model = NewsTag::class;

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('name')->label(trans('news::news.tag_name'))->multiLang(),
            ColorInput::make('color')->label(trans('news::news.tag_color')),
        ];
    }

    public static function title()
    {
        return trans('news::news.tags');
    }

    public static function singular()
    {
        return trans('news::news.tag');
    }
}