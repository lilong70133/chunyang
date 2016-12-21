<?php

namespace App\Providers;

use Collective\Html\FormFacade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        FormFacade::component('bsText', 'form.text', ['name', 'value'=> null, 'attributes'=>[]]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
