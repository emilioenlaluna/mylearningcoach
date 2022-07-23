<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
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

        Blade::if('maestro', function () {
            if (Auth::user() && Auth::user()->getRole() == 1) {
                return 1;
            }
            return 0;
        });

        Blade::if('padres', function () {
            if (Auth::user() && Auth::user()->getRole() == 2) {
                return 1;
            }
            return 0;
        });

        Blade::if('tutor', function () {
            if (Auth::user() && Auth::user()->getRole() == 3) {
                return 1;
            }
            return 0;
        });

        Blade::if('alumno', function () {
            if (Auth::user() && Auth::user()->getRole() == 4) {
                return 1;
            }
            return 0;
        });

    }
}
