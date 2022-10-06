<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'../../resources/lang', 'seo');  
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
