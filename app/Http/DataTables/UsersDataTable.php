<?php

namespace App\Http\DataTables;

use App\Http\DataTables\Actions\TestAction;
use App\Models\User;
use Aut\VueDataTable\Builders\Email;
use Aut\Authorization\Resources\Roles;
use Aut\VueDataTable\Builders\TextInput;
use Aut\VueDataTable\Filters\SoftDelete;
use Aut\VueDataTable\Builders\HiddenInput;
use Aut\VueDataTable\Builders\PasswordInput;
use Aut\VueDataTable\Builders\BelongsToMany;
use Aut\Authorization\Resources\Permissions;
use Aut\VueDataTable\ApiResources\VueDataTable;
use Aut\Authorization\DataTable\Actions\LoginAs;
use Aut\VueDataTable\OptionsBuilder\ChipsOptions;
use Aut\Authorization\DataTable\Actions\BlockUser;
use Aut\Authorization\DataTable\Actions\UnblockUser;
use Aut\Authorization\Autocompletes\RoleAutocomplete;
use Aut\Authorization\DataTable\Filters\AccountStatus;
use Aut\Authorization\Autocompletes\PermissionAutocomplete;

class UsersDataTable extends VueDataTable
{
    public static $model = User::class;

    protected static $defaultAddAction = true;

    public function mapper($request)
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'permissions' => Permissions::collection($this->permissions),
            'roles' => Roles::collection($this->roles),
            'permission_id' => $this->permissions->pluck('id'),
            'role_id' => $this->roles->pluck('id'),
            'deleted_at' => $this->deleted_at,
            'blocked_at' => $this->blocked_at,
        ];
    }

    public static function fields()
    {
        return [
            HiddenInput::make('id'),
            TextInput::make('username')->label(trans('app.username')),
            Email::make('email')->label(trans('app.email')),
            BelongsToMany::make('permissions', 'permission_id')
                ->label(trans('app.permissions'))
                ->optionText('permission_name')
                ->resource(PermissionAutocomplete::class)
                ->searchable('permissionName.name')
                ->optionsTemplate(new ChipsOptions()),

            BelongsToMany::make('roles', 'role_id')
                ->label(trans('app.roles'))
                ->optionText('role_name')
                ->resource(RoleAutocomplete::class)
                ->searchable('roleName.name')
                ->optionsTemplate(new ChipsOptions),

            PasswordInput::make('password')->label(trans('app.password'))->autoGenerate()->hideFromTable(),
        ];
    }

    public static function filters()
    {
        return [
            new SoftDelete,
            new AccountStatus,
        ];
    }

    public static function actions()
    {
        return [
            //TestAction::make(),
            LoginAs::make()->can('automata'),
            BlockUser::make(),
            UnblockUser::make(),
        ];
    }

    public static function title()
    {
        return trans('app.users');
    }

    public static function singular()
    {
        return trans('app.user');
    }
}
