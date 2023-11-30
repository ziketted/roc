<?php

namespace App\Providers;


use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use MaxMind\GeoIP2\Database\Reader;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('MaxMind\GeoIP2\Database\Reader', function ($app) {
            $databasePath = storage_path('app/geoip2/database/GeoLite2-City.mmdb');

            return new Reader($databasePath);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }
}
