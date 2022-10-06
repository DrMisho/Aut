<?php

namespace App\Http\DataTables;

use App\Models\Box;
use Aut\VueDataTable\Builders\DateInput;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Builders\CkEditor;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\GlobalSettings\Models\JobTitle;

class JobTitlesDataTable extends VueDataTable
{
    use WithTranslation;

    public static $model = JobTitle::class;


    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('name')->label(trans('job_title.name'))->multiLang(),
            
        ];
    }

    public static function title()
    {
        return trans('job_title.job_titles');
    }

    public static function singular()
    {
        return trans('job_title.job_title_singular');
    }
}
