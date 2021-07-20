<?php

namespace App\Providers;

use App\Models\Property;
use App\Observers\PropertyObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Property::observe(PropertyObserver::class);
    }
}
