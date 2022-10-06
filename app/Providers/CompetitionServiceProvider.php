<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CompetitionServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'../../resources/lang', 'competition');  
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