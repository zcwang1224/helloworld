<?php

namespace Zcwang\HelloWorld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make(HelloWorldController::class);

        // include(__DIR__ . '/web.php');
        $this->loadRoutesFrom(__DIR__.'/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'HelloWorld');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadTranslationsFrom(__DIR__.'/lang/','helloname');
        // $this->publishes([__DIR__.'/config/hello.php' => config_path('hello.php')]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->mergeConfigFrom(
            __DIR__.'/config/hello.php', 'queue'
        );
    }
}
