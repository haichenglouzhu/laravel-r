<?php

namespace LoginR\Src;

use Illuminate\Support\ServiceProvider;

class LoginReg extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('loginR', function () {
           return new LoginR();
        });
    }
}
