<?php

namespace App\Providers;

use App\View\Components\ClientItem;
use App\View\Components\CompetitionItem;
use App\View\Components\ContributionItem;
use App\View\Components\Suite;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();

        \Blade::component('suite', Suite::class);
        \Blade::component('competition-item', CompetitionItem::class);
        \Blade::component('contribution-item', ContributionItem::class);
        \Blade::component('client-item', ClientItem::class);

    }
}
