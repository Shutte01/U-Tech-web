<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
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
    public function boot():void
    {
        Paginator::useBootstrap();

        Gate::define('isAdmin', function (User $user) {
            return $user->is_admin;
        });

        if (config('app.env') != 'local') {
            URL::forceScheme('https');
        }
    }
}
