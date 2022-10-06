<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CityServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'../../resources/lang', 'city');  
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
