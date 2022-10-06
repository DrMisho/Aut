<?php

namespace App\Http\DataTables;

use App\Http\FileUploader\ContributionFileUpload;
use App\Http\FileUploader\ContributionImageUpload;
use App\Models\Contribution;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\VueDataTable\Builders\DateInput;
use Aut\VueDataTable\Builders\FilePond;

class ContributionDataTable extends VueDataTable
{

    use WithTranslation;
    public static $model = Contribution::class;


    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'contribution_date' => $this->contribution_date,
            'contribution_file_id' => $this->contribution_file_id,
            'file_path' => $this->file_path,
            'name' => $this->name,
            'image_id' => $this->image_id,
            'image_path' =>$this->image_path
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('name')->label(trans('contribution.name'))->multiLang(),
            DateInput::make('contribution_date')->label(trans('contribution.contribution_date')),
            FilePond::make('contribution_file_id', 'file_path', ContributionFileUpload::class)->label(trans('contribution.contribution_file')),
            FilePond::make('image_id', 'image_path', ContributionImageUpload::class)->label(trans('contribution.image')),
        ];
    }

    public static function title()
    {
        return trans('contribution.contributions');
    }

    public static function singular()
    {
        return trans('contribution.contribution_singular');
    }
}
