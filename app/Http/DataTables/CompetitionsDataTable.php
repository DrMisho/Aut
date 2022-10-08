<?php

namespace App\Http\DataTables;

use App\Http\Autocompletes\CityAutocomplete;
use App\Http\Autocompletes\TeamAutocomplete;
use App\Http\FileUploader\CompetitionImageUpload;
use App\Models\Competition;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Builders\SelectInput;
use Aut\VueDataTable\Builders\BelongsTo;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Builders\FilePond;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\VueDataTable\Builders\DateInput;

class CompetitionsDataTable extends VueDataTable
{

    use WithTranslation;
    public static $model = Competition::class;


    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'position' => $this->position,
            'organization' => $this->organization,
            'location_type' => $this->location_type,
            'year' => $this->year,
            'show_order' => $this->show_order,
            'city' => $this->city->city_code,
            'city_id' => $this->city_id,
            'team' => $this->team->name,
            'team_id' => $this->team_id,
            'image_id' => $this->image_id,
            'image_path' =>$this->image_path
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('title')->label(trans('competition.title'))->multiLang(),
            TextInput::make('position')->label(trans('competition.position'))->multiLang(),
            TextInput::make('organization')->label(trans('competition.organization'))->multiLang(),
            SelectInput::make('location_type')->label(trans('competition.location'))->options([
                ['value' => 'I' , 'text' => trans('competition.international')],
                ['value' => 'L' , 'text' => trans('competition.local')],
            ]),
            TextInput::make('show_order')->label(trans('competition.show_order')),
            DateInput::make('year')->label(trans('competition.year')),

            BelongsTo::make('city', 'city_id')->label(trans('competition.competition_city'))
                ->sortable('name')
                ->searchable('name')
                ->resource(CityAutocomplete::class),

            BelongsTo::make('team', 'team_id')->label(trans('competition.competition_team'))
                ->sortable('name')
                ->searchable('name')
                ->resource(TeamAutocomplete::class),

            FilePond::make('image_id', 'image_path', CompetitionImageUpload::class)->label(trans('competition.image')),
           
        ];
    }

    public static function title()
    {
        return trans('competition.competitions');
    }

    public static function singular()
    {
        return trans('competition.competition_singular');
    }
}
