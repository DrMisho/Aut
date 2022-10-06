<?php

namespace App\Http\DataTables;


use App\Http\Autocompletes\SeoAutocomplete;
use App\Http\DataTables\Actions\AddSeoAction;
use App\Models\Page;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Builders\BelongsTo;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\VueDataTable\Builders\CkEditor;

class PagesDataTable extends VueDataTable
{

    use WithTranslation;
    public static $model = Page::class;


    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'page_name' => $this->page_name,
            'subtitle' => $this->subtitle,
            'content' => $this->content,
            'seo' => $this->seo,
            'model' => $this->getMorphClass()
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('page_name')->label(trans('page.page_name')),
            TextInput::make('subtitle')->label(trans('page.subtitle'))->multiLang(),
            CkEditor::make('content')->label(trans('page.content'))->multiLang(),

        ];
    }
    public static function actions()
    {
        return [
            AddSeoAction::make(),
        ];
    }

    public static function title()
    {
        return trans('page.pages');
    }

    public static function singular()
    {
        return trans('page.page_singular');
    }
}
