<?php

namespace Aut\News\DataTables;

use Aut\News\Models\NewsStatus;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\VueDataTable\ApiResources\VueDataTable;

class StatusesDataTable extends VueDataTable
{
    use WithTranslation;

    public static $model = NewsStatus::class;

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('name')->label(trans('news::news.status_name'))->multiLang(),
            TextInput::make('code')->label(trans('news::news.code')),
        ];
    }

    public static function title()
    {
        return trans('news::news.statuses');
    }

    public static function singular()
    {
        return trans('news::news.status');
    }
}