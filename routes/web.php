<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{
    Route::get('/', function (\Illuminate\Http\Request $request) {
        return view('index', [
            'title' => 'Home Page',
            'boxes' => \App\Models\Box::query()->whereIn('code', ['only-technology', 'did-you-hear', 'hidden-treasure'])->get(),
            'clients' => \App\Models\Client::query()->orderBy('show_order')->get(),
            'suites' => \App\Models\Suite::query()->orderBy('show_order')->get()
        ]);
    })->name('home');


    Route::get('/team', function () {
        //dd(\App\Models\Team::all());
        return view('team.index', [
            'teams' => \App\Models\Team::query()->orderBy('show_order')->get(),
            'page' => \App\Models\Page::query()->where('page_name', '=', 'team')->first(),
            'title' => 'Team'
        ]);
    });

    Route::get('/about', function(){
        return view('about.index', [
            'boxes' => \App\Models\Box::query()->where('code', '=', 'story')->get(),
            'teams' =>\App\Models\Team::query()->orderBy('show_order')->limit('3')->get(),
            'title' => 'About'
        ]);
    });

    Route::get('/suites/{code}', function($code){
        //dd(\App\Models\Suite::query()->where('suite_code', '=', $code)->first());
        return view('suite.show', [
            'suite' => \App\Models\Suite::query()->where('suite_code', '=', $code)->first(),
            'title' => 'Solutions'
        ]);
    });

    Route::get('/website-development', function() {
        return view('website.index', [
            'page' => \App\Models\Page::query()->where('page_name', '=', 'website-development')->first(),
            'title' => 'Website Development'
        ]);
    });

    Route::get('/graphic-design', function() {
        return view('graphic.index', [
            'title' => 'Graphic Design'
        ]);
    });

    Route::get('/web', function () {
        return view('web.index', [
            'title' => 'Web'
        ]);
    });

    Route::get('/database', function() {
        return view('database.index', [
            'title' => 'Database'
        ]);
    });

    Route::get('/software-engineering', function () {
        return view('software.index', [
            'title' => 'Software Engineering'
        ]);
    });

    Route::get('/standards', function () {
        return view('standards.index', [
            'title' => 'Standards'
        ]);

    });

    Route::get('/competitions', function () {
        //dd(\App\Models\Competition::query()->orderBy('show_order')->with(['city', 'team'])->get());
        return view('competitions.index', [
            'competitions' => \App\Models\Competition::query()->orderBy('show_order')->with(['city', 'team'])->get(),
            'title' => 'Competitions'
        ]);
    });

    Route::get('/benefits', function () {
        return view('benefits.index', [
            'title' => 'Benefits'
        ]);

    });

    Route::get('/contributions', function () {
        return view('contributions.index', [
            'contributions' => \App\Models\Contribution::query()->orderBy('contribution_date')->get(),
            'title' => 'Contributions'
        ]);

    });

    Route::get('/clients', function () {

        return view('clients.index', [
            'countries' => \App\Models\Country::query()->has('clients')->get(),
            'suites' => \App\Models\Suite::query()->orderBy('show_order')->get(),
            'clients' => \App\Models\Client::query()->orderBy('show_order')->get(),
            'client_say' => \App\Models\ClientSay::all(),
            'title' => 'Clients'
        ]);

    });

    Route::get('/news', function () {

        return view('news.index', [
            'news' => \App\Models\News::query()->orderBy('publish_at')->with('city')->paginate(10),
            'title' => 'News'
        ]);

    });

    Route::get('/news/{news}', function (\App\Models\News $news) {

        return view('news.show', [
            'news' => $news,
            'title' => $news->translate('en')->title
        ]);

    });

    Route::get('/contact', function () {
        return view('contact.index', [
            'branches' => \App\Models\Branch::all(),
            'countries' => \App\Models\Country::all(),
            'job_titles' => \Aut\GlobalSettings\Models\JobTitle::all(),
            'title' => 'Contact'
        ]);
    })->middleware('cors');

    Route::get('/events', function () {
        return view('events.index', [
            'events' => \App\Models\Event::query()->orderBy('event_date')->paginate(10),
            'title' => 'Events'
        ]);
    });

    Route::get('/events/{event}', function(\App\Models\Event $event) {
        return $event;
    });
});
