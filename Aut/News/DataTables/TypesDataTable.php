<?php

namespace Aut\News\DataTables;

use Aut\News\Models\NewsType;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\BelongsTo;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\News\Autocompletes\CategoryAutocomplete;

class TypesDataTable extends VueDataTable
{
    use WithTranslation;

    public static $model = NewsType::class;

    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->category->name,
            'category_id' => $this->category->id,
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('name')->label(trans('news::news.type_name'))->multiLang(),

            BelongsTo::make('category', 'category_id')->label(trans('news::news.category'))
                ->sortable('name')
                ->searchable('name')
                ->resource(CategoryAutocomplete::class),
        ];
    }

    public static function title()
    {
        return trans('news::news.types');
    }

    public static function singular()
    {
        return trans('news::news.type');
    }
}