<?php

namespace App\Http\DataTables;

use App\Http\Autocompletes\CountryAutocomplete;
use App\Http\Autocompletes\SuiteAutocomplete;
use App\Http\FileUploader\ClientFileUpload;
use App\Http\FileUploader\ClientLogoUpload;
use App\Models\Client;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Builders\BelongsTo;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Builders\FilePond;
use Aut\News\FileUploader\ImageNewsUpload;
use Aut\News\FileUploader\VideoNewsUpload;
use Aut\VueDataTable\Traits\WithTranslation;

class ClientsDataTable extends VueDataTable
{

    use WithTranslation;
    public static $model = Client::class;


    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'website' => $this->website,
            'show_order' => $this->show_order,
            'country' => $this->country->name,
            'country_id' => $this->country->id,
            'name' => $this->name,
            'suite' => $this->suite->name,
            'suite_id' => $this->suite_id,
            'testimonial_id' => $this->testimonial_id,
            'file_path' => $this->file_path,
            'logo_id' => $this->logo_id,
            'logo_path' => $this->logo_path,
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('website')->label(trans('client.website')),
            TextInput::make('name')->label(trans('client.name'))->multiLang(),

            BelongsTo::make('country', 'country_id')->label(trans('client.client_country'))
                ->sortable('name')
                ->searchable('name')
                ->resource(CountryAutocomplete::class),

            BelongsTo::make('suite', 'suite_id')->label(trans('client.client_suite'))
                ->sortable('name')
                ->searchable('name')
                ->resource(SuiteAutocomplete::class),

            TextInput::make('show_order')->label(trans('client.order')),

            FilePond::make('logo_id', 'logo_path', ClientLogoUpload::class)->label(trans('client.image')),
            FilePond::make('testimonial_id', 'file_path', ClientFileUpload::class)->label(trans('client.testimonial')),

        ];
    }

    public static function title()
    {
        return trans('client.clients');
    }

    public static function singular()
    {
        return trans('client.client_singular');
    }
}
