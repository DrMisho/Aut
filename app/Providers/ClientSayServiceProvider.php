<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ClientSayServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'../../resources/lang', 'client_say');  
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