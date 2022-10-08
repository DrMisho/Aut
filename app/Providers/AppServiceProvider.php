<?php

namespace App\Providers;

<<<<<<< HEAD
use App\View\Components\CompetitionItem;
=======
>>>>>>> 2acf874ffd363b05bdb4b074a785ff85807be72a
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
<<<<<<< HEAD
        \Blade::component('competition-item', CompetitionItem::class);
=======
>>>>>>> 2acf874ffd363b05bdb4b074a785ff85807be72a
    }
}
