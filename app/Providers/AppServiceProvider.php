<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;

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
// set the public path to this directory
$this->app->bind('path.public', function() {
    return base_path().'/../public_html';
});
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
public function boot()
{
// set the public path to this directory
$this->app->bind('path.public', function() {
    return base_path().'/../public_html';
});
    Schema::defaultStringLength(191);
}
}

