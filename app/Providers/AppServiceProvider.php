<?php

namespace App\Providers;

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
        // Middleware registration
        $this->app['router']->aliasMiddleware('auth.user', \App\Http\Middleware\AuthUser::class);
        $this->app['router']->aliasMiddleware('auth.admin', \App\Http\Middleware\AuthAdmin::class);
    }
}
