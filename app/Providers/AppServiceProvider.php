<?php

namespace App\Providers;

use App\View\Components\About;
use App\View\Components\BenefitItem;
use App\View\Components\Box;
use App\View\Components\ClientItem;
use App\View\Components\CompetitionItem;
use App\View\Components\ContactUs;
use App\View\Components\ContributionItem;
use App\View\Components\EventItem;
use App\View\Components\Feature;
use App\View\Components\GoodAt;
use App\View\Components\Hero;
use App\View\Components\History;
use App\View\Components\Idea;
use App\View\Components\Layout;
use App\View\Components\Module;
use App\View\Components\Requirement;
use App\View\Components\service;
use App\View\Components\Suite;
use App\View\Components\SuiteList;
use App\View\Components\TeamMember;
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

        \Blade::component('suite-list', SuiteList::class);
        \Blade::component('competition-item', CompetitionItem::class);
        \Blade::component('contribution-item', ContributionItem::class);
        \Blade::component('client-item', ClientItem::class);
        \Blade::component('contact-us', ContactUs::class);
        \Blade::component('good-at', GoodAt::class);
        \Blade::component('team-member', TeamMember::class);
        \Blade::component('hero', Hero::class);
        \Blade::component('about', About::class);
        \Blade::component('service', Service::class);
        \Blade::component('box', Box::class);
        \Blade::component('history', History::class);
        \Blade::component('idea', Idea::class);
        \Blade::component('event-item', EventItem::class);
        \Blade::component('benefit-item', BenefitItem::class);
        \Blade::component('requirement', Requirement::class);
        \Blade::component('feature', Feature::class);
        \Blade::component('module', Module::class);
        \Blade::component('layout', Layout::class);


    }
}
