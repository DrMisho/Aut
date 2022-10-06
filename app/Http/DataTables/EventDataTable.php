<?php

namespace App\Http\DataTables;

use App\Http\Autocompletes\CityAutocomplete;
use App\Models\Event;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Builders\BelongsTo;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\VueDataTable\Builders\CkEditor;
use Aut\VueDataTable\Builders\DateInput;

class EventDataTable extends VueDataTable
{

    use WithTranslation;
    public static $model = Event::class;


    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'event_code' => $this->event_code,
            'event_date' => $this->event_date,
            'city' => $this->city->city_code,
            'city_id' => $this->city->id,
            'title' => $this->title,
            'description' => $this->description,
            'location' => $this->location,
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('event_code')->label(trans('event.event_code')),
            TextInput::make('title')->label(trans('event.title'))->multiLang(),
            CkEditor::make('description')->label(trans('event.description'))->multiLang(),
            TextInput::make('location')->label(trans('event.location'))->multiLang(),
            DateInput::make('event_date')->label(trans('event.event_date')),

            BelongsTo::make('city', 'city_id')->label(trans('event.event_city'))
                ->sortable('name')
                ->searchable('name')
                ->resource(CityAutocomplete::class),

        ];
    }

    public static function title()
    {
        return trans('event.events');
    }

    public static function singular()
    {
        return trans('event.event_singular');
    }
}
