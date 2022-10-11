<?php

namespace App\Http\DataTables;


use App\Http\Autocompletes\ModuleAutocomplete;
use App\Http\Autocompletes\SolutionAutocomplete;
use App\Http\DataTables\Actions\AddSeoAction;
use App\Http\DataTables\Actions\AddSuiteAction;
use App\Http\DataTables\Actions\DeleteSuiteAction;
use App\Http\DataTables\Actions\EditSuiteAction;
use App\Http\FileUploader\SuiteImageUpload;
use App\Http\Resources\SolutionsResource;
use App\Models\Module;
use App\Models\SolutionModule;
use Illuminate\Support\Arr;
use App\Http\Resources\Suites;
use App\Models\Suite;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Builders\BelongsToMany;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\VueDataTable\OptionsBuilder\ChipsOptions;
use Aut\VueDataTable\Builders\FilePond;

class SuitesDataTable extends VueDataTable
{

    use WithTranslation;

    protected static $defaultAddAction = false;
    protected static $defaultEditAction = false;
    protected static $defaultDeleteAction = false;

    public static $model = Suite::class;

    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'suite_code' => $this->suite_code,
            'show_order' => $this->show_order,
            'seo' => $this->seo,
            'name' => $this->name,
            'long_name' => $this->long_name,
            'vision' => substr($this->vision, 0, $length = 100),
            'model' => $this->getMorphClass(),
            'solutions' => SolutionsResource::collection($this->solutions),
            'solution_id' => SolutionsResource::collection($this->solutions)->pluck('id'),
            'image_path' => $this->image_path,
            'image_id' => $this->image_id,
            'modules' => Module::query()->whereIn('id', SolutionModule::query()->whereIn('solution_suite_id', $this->suiteSolutions->pluck('id'))->get()->pluck('module_id'))->get()->pluck('name'),
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('suite_code')->label(trans('suite.code')),
            TextInput::make('show_order')->label(trans('suite.show_order')),
            TextInput::make('name')->label(trans('suite.name'))->multiLang(),
            TextInput::make('long_name')->label(trans('suite.long_name'))->multiLang(),
            TextInput::make('vision')->label(trans('suite.vision'))->multiLang(),

            BelongsToMany::make('solutions', 'solution_id')->label(trans('suite.solution_suite'))
                ->optionText('name')
                ->resource(SolutionAutocomplete::class)
                ->optionsTemplate(new ChipsOptions),

            TextInput::make('modules')->label(trans('suite.module_solution')),
            FilePond::make('image_id', 'image_path', SuiteImageUpload::class)->label(trans('suite.image')),
        ];
    }
    public static function actions()
    {
        return [
            AddSeoAction::make(),
            AddSuiteAction::make(),
            EditSuiteAction::make(),
            DeleteSuiteAction::make(),
        ];
    }

    public static function title()
    {
        return trans('suite.suites');
    }

    public static function singular()
    {
        return trans('suite.suite_singular');
    }
}
