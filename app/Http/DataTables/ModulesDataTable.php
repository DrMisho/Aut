<?php

namespace App\Http\DataTables;

use App\Http\Autocompletes\SolutionAutocomplete;
use App\Http\Autocompletes\SuiteAutocomplete;
use App\Http\DataTables\Actions\AddModuleAction;
use App\Http\DataTables\Actions\DeleteModuleAction;
use App\Http\DataTables\Actions\EditModuleAction;
use App\Models\Module;
use App\Http\Resources\Suites;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Builders\BelongsToMany;
use Aut\VueDataTable\Builders\BelongsTo;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\VueDataTable\OptionsBuilder\ChipsOptions;
use Aut\VueDataTable\Builders\CkEditor;

class ModulesDataTable extends VueDataTable
{

    use WithTranslation;

    public static $model = Module::class;


    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'module_code' => $this->module_code,
            'name' => $this->name,
            'description' => $this->description,
            'solution' => $this->solution->name,
            'solution_id' => $this->solution->id,
            'show_order' => $this->show_order,
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('module_code')->label(trans('module.code')),
            TextInput::make('name')->label(trans('module.name'))->multiLang(),
            CkEditor::make('description')->label(trans('module.description'))->multiLang(),

            BelongsTo::make('solution', 'solution_id')->label(trans('module.module_solution'))
                ->sortable('name')
                ->searchable('name')
                ->resource(SolutionAutocomplete::class),


            TextInput::make('show_order')->label(trans('module.order')),

        ];
    }


    public static function title()
    {
        return trans('module.modules');
    }

    public static function singular()
    {
        return trans('module.module_singular');
    }
}
