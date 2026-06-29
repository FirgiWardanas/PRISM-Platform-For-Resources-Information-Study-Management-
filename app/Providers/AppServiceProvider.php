<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

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
        Carbon::setLocale('id');

        view()->composer('components.layout.footer', function ($view) {
            $view->with('semuaProdi', \App\Models\Prodi::where('status_prodi', 'published')->get());
        });
    }
}
