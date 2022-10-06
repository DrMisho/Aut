<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CountryServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'../../resources/lang', 'country');  
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