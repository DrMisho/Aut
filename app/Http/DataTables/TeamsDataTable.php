<?php

namespace App\Http\DataTables;

use App\Http\Autocompletes\JobTitleAutocomplete;
use App\Http\Autocompletes\SocialNetworkAutocomplete;
use App\Http\DataTables\Actions\AddTeamAction;
use App\Http\DataTables\Actions\DeleteTeamAction;
use App\Http\DataTables\Actions\EditTeamAction;
use App\Http\FileUploader\TeamImageUpload;
use App\Http\Resources\SocialNetworks;
use App\Models\Team;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Builders\BelongsTo;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\VueDataTable\Traits\WithTranslation;
use Aut\VueDataTable\OptionsBuilder\ChipsOptions;
use Aut\VueDataTable\Builders\FilePond;
use Aut\VueDataTable\Builders\BelongsToMany;

class TeamsDataTable extends VueDataTable
{

    use WithTranslation;

    public static $model = Team::class;

    protected static $defaultAddAction = false;
    protected static $defaultEditAction = false;
    protected static $defaultDeleteAction = false;
    
    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'tags' => $this->tags,
            'name' => $this->name,
            'show_order' => $this->show_order,
            'pic_name_id' => $this->pic_name_id,
            'image_path' => $this->image_path,
            'job_title' => $this->jobTitle->name,
            'job_title_id' => $this->jobTitle->id,
            'socialNetworks' => SocialNetworks::collection($this->socialNetworks),
            'social_network_id' => $this->socialNetworks->pluck('id'),
            'account' => $this->socialNetworks->pluck('pivot')->pluck('account')
            

        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('tags')->label(trans('team.tags')),
            TextInput::make('name')->label(trans('team.name'))->multiLang(),
            TextInput::make('show_order')->label(trans('team.show_order')),
            
            BelongsTo::make('job_title', 'job_title_id')
                ->label(trans('team.team_job'))
                ->sortable('title')
                ->searchable('title')
                ->resource(JobTitleAutocomplete::class),

            BelongsToMany::make('socialNetworks', 'social_network_id')->label(trans('team.team_social'))
                ->optionText('name')
                ->resource(SocialNetworkAutocomplete::class)
                ->optionsTemplate(new ChipsOptions),

            TextInput::make('account')->label(trans('team.account')),

            
            FilePond::make('pic_name_id', 'image_path', TeamImageUpload::class)->label(trans('team.image')),
        ];
    }
    public static function actions()
    {
        return [
            AddTeamAction::make(),
            EditTeamAction::make(),
            DeleteTeamAction::make(),
        ];
    }
    public static function title()
    {
        return trans('team.teams');
    }

    public static function singular()
    {
        return trans('team.team_singular');
    }
}
