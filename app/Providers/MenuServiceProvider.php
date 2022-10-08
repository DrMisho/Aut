<?php

namespace App\Providers;

use App\Menu\AdminMenu;
use App\Menu\UserMenu;
use Aut\VueMenu\Builder\MenuBuilder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class MenuServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        app(MenuBuilder::class)
            ->bind(new AdminMenu)
            ->bind(new UserMenu);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            MenuBuilder::class,
        ];
    }
}
