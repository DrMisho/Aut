<?php
namespace Aut\News\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class NewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Router $router
     */
    public function boot(Router $router)
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'news');

        $this->publishes([
            __DIR__.'/../config/news.php' => config_path('news.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'news-migrations');

        $this->registerModelBindings();
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadConfigFile();
    }

    private function loadConfigFile()
    {
        $this->mergeConfigFrom(
            __DIR__ . '\..\config\news.php', 'news'
        );
    }

    protected function registerModelBindings()
    {
        $models = config('news.models');
        foreach ($models as $key => $model) {
            $this->app->bind("news.models.$key", $model);
        }
    }
}