<?php

namespace App\Menu;

use Aut\VueMenu\Builder\Link;
use Aut\VueMenu\Builder\Panel;
use Aut\VueMenu\Builder\Toolbar;
use Aut\VueMenu\Builder\DropDown;
use Aut\Authorization\Authorization;

class AdminMenu
{
    public function __invoke()
    {
        return [

            Link::make()->title($this->trans('dashboard'))->icon('dashboard')->to(['name' => 'dashboard'])->exact(),

            DropDown::make([

                Link::make()->title($this->trans('languages'))->to(['name' => 'languages']),
                Link::make()->title($this->trans('social_network'))->to(['name' => 'social_networks']),
                Link::make()->title($this->trans('gender'))->to(['name' => 'genders']),
                Link::make()->title($this->trans('icons'))->to(['name' => 'icons']),

            ])->title($this->trans('settings'))->icon('fas fa-cogs'),

            DropDown::make([
                Link::make()->title($this->trans('permissions'))->to(['name' => 'permissions'])->can('automata'),
                Link::make()->title($this->trans('roles'))->to(['name' => 'roles']),
                Link::make()->title($this->trans('users'))->to(['name' => 'users']),
            ])->title($this->trans('authentication'))->icon('fas fa-user-lock'),


            DropDown::make([
                Link::make()->title($this->trans('box'))->to(['name' => 'box']),
                Link::make()->title($this->trans('news'))->to(['name' => 'news']),
                Link::make()->title($this->trans('news-categories'))->to(['name' => 'news-categories']),
                Link::make()->title($this->trans('news-statuses'))->to(['name' => 'news-statuses']),
                Link::make()->title($this->trans('news-tags'))->to(['name' => 'news-tags']),
                Link::make()->title($this->trans('news-types'))->to(['name' => 'news-types']),
                Link::make()->title($this->trans('branch'))->to(['name' => 'branch']),
                Link::make()->title($this->trans('suite'))->to(['name' => 'suite']),
                Link::make()->title($this->trans('client'))->to(['name' => 'client']),
                Link::make()->title($this->trans('solution'))->to(['name' => 'solution']),
                Link::make()->title($this->trans('module'))->to(['name' => 'module']),                
                Link::make()->title($this->trans('page'))->to(['name' => 'page']),
                Link::make()->title($this->trans('team'))->to(['name' => 'team']),
                Link::make()->title($this->trans('job-title'))->to(['name' => 'job-title']),
                Link::make()->title($this->trans('client-say'))->to(['name' => 'client-say']),
                Link::make()->title($this->trans('event'))->to(['name' => 'event']),
                Link::make()->title($this->trans('contribution'))->to(['name' => 'contribution']),
                Link::make()->title($this->trans('competition'))->to(['name' => 'competition']),
                Link::make()->title($this->trans('country'))->to(['name' => 'country']),
                Link::make()->title($this->trans('city'))->to(['name' => 'city']),

            ])->title($this->trans('data'))->icon('dashboard'),

            

            

            Toolbar::make(Authorization::userMenu())->icon('fas fa-cog')->title($this->trans('settings')),

//            Toolbar::make([
//                Partial::make(Authorization::userMenu()),
//                Panel::make([
//                    Link::make()->title($this->trans('my_services'))->to(['name' => 'my_services'])->icon('far fa-handshake')->exact(),
//                ])->title($this->trans('settings'))->can('user'),
//            ])->icon('fas fa-cog')->title($this->trans('settings')),
        ];
    }

    public function trans($key)
    {
        return trans("navigation.${key}");
    }
}
