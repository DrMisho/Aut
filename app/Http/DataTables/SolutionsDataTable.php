<?php

namespace App\Http\DataTables;

use App\Http\DataTables\Actions\AddSolutionAction;
use App\Http\DataTables\Actions\EditSolutionAction;
use App\Http\Autocompletes\SuiteAutocomplete;
use App\Http\DataTables\Actions\DeleteSolutionAction;
use App\Models\Solution;
use App\Http\Resources\Suites;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Builders\BelongsToMany;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\VueDataTable\OptionsBuilder\ChipsOptions;

class SolutionsDataTable extends VueDataTable
{

    use WithTranslation;

    public static $model = Solution::class;

    protected static $defaultAddAction = false;
    protected static $defaultEditAction = false;
    protected static $defaultDeleteAction = false;

    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'solution_code' => $this->solution_code,
            'name' => $this->name,
            'suites' => Suites::collection($this->suites),
            'suites_id' => $this->suites->pluck('id'),
            //'show_order' => Suites::collection(),
            'show_order' => $this->suites->pluck('pivot')->pluck('show_order')
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('solution_code')->label(trans('sloution.code')),
            TextInput::make('name')->label(trans('sloution.name'))->multiLang(),

            BelongsToMany::make('suites', 'suites_id')->label(trans('solution.solution_suite'))
                ->optionText('name')
                ->resource(SuiteAutocomplete::class)
                ->optionsTemplate(new ChipsOptions),
                //->fields([
                //    TextInput::make('account')->label(trans('social_account')),
                //]),

            TextInput::make('show_order')->label(trans('sloution.order')),

        ];
    }

    public static function actions()
    {
        return [
            AddSolutionAction::make(),
            EditSolutionAction::make(),
            DeleteSolutionAction::make(),
        ];
    }

    public static function title()
    {
        return trans('sloution.solutions');
    }

    public static function singular()
    {
        return trans('sloution.solution_singular');
    }
}
