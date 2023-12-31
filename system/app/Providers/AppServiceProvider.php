<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('assets', function ($expression) {
            return "<?= asset('assets/'.{$expression}) ?>";
        });
        Blade::directive('route', function ($expression) {
            return "<?= route({$expression}) ?>";
        });
    }
}
