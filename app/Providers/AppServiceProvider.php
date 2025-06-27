<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
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
        // تفعيل استخدام Bootstrap 5 للـ pagination
        Paginator::useBootstrapFive();
        app()->setLocale(session('locale', config('app.locale')));

    }
}
