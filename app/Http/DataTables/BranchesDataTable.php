<?php

namespace App\Http\DataTables;

use App\Http\Autocompletes\CountryAutocomplete;
use App\Models\Branch;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Builders\BelongsTo;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Builders\FilePond;
use App\Http\FileUploader\BranchImageUpload;
use App\Http\FileUploader\BranchLogoUpload;
use Aut\VueDataTable\Traits\WithTranslation;

class BranchesDataTable extends VueDataTable
{

    use WithTranslation;
    public static $model = Branch::class;


    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'address' => $this->address,
            'country' => $this->country->country_code_3,
            'country_id' => $this->country->id,
            'phone' => $this->phone,
            'email' => $this->email,
            'image_id' => $this->image_id,
            'image_path' => $this->image_path,
            'logo_id' => $this->logo_id,
            'logo_path' => $this->logo_path,
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('address')->label(trans('branch.address'))->multiLang(),
            TextInput::make('phone')->label(trans('branch.phone')),

            BelongsTo::make('country', 'country_id')->label(trans('branch.branch_country'))
                ->sortable('name')
                ->searchable('name')
                ->resource(CountryAutocomplete::class),

            FilePond::make('image_id', 'image_path', BranchImageUpload::class)->label(trans('branch.image')),
            FilePond::make('logo_id', 'logo_path', BranchLogoUpload::class)->label(trans('branch.logo')),

        ];
    }

    public static function title()
    {
        return trans('branch.branches');
    }

    public static function singular()
    {
        return trans('branch.branch_singular');
    }
}
