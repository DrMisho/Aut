<?php

namespace App\Providers;

use App\View\Components\CompetitionItem;
use App\View\Components\Suite;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Relation::enforceMorphMap([
//            'news' => 'Aut\News\Models\News',
//        ]);
        \Blade::component('suite', Suite::class);
        \Blade::component('competition-item', CompetitionItem::class);
    }
}
