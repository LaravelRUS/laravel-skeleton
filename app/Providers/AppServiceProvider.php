<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * @property  \Illuminate\Foundation\Application $app  The application instance.
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $localProviders = config('app.local_providers', []);
            array_map([$this->app, 'register'], $localProviders);
        }
    }
}
