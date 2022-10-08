<?php

namespace Aut\Cake\Providers;

use Illuminate\Support\ServiceProvider;

class CakeServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        //$this->loadMigrationsFrom(__DIR__.'/../database/migrations');     
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'cakes');  
        
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'cakes-migrations');

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
}
