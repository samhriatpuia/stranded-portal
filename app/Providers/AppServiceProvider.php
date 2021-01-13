<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

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
        // If you are running lower version of MySQL then you may get following error : 1071 Specified key was too long; max key length is 767 bytes
        // To fix this, I'm setting max string length of all db fields by default to 191
        Schema::defaultStringLength(191);

        Validator::extend('alpha_spaces', function ($attribute, $value) {

            // This will only accept alpha and spaces.
            // If you want to accept hyphens use: /^[\pL\s-]+$/u.
            // return preg_match('/^[\pL\s]+$/u', $value); this is for alphabet and space only
            //below is for alpha space and dot(.)
            return preg_match('/^[\pL\s.]+$/u', $value);

        });
    }
}
