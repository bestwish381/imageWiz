<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
// use FloatingPoint\Stylist\StylistServiceProvider;
use Nwidart\Modules\LaravelModulesServiceProvider;
use Jackiedo\DotenvEditor\DotenvEditorServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->register(StylistServiceProvider::class);
        $this->app->register(LaravelModulesServiceProvider::class);

        if (! config('app.installed')) {
            $this->app->register(DotenvEditorServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        URL::forceScheme('http');
        if (Request::secure()) {
            URL::forceScheme('http');
        }
    }
}
