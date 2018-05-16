<?php

namespace Laraveldaily\Timezones;

use Illuminate\Support\ServiceProvider;


class TimezonesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/laraveldaily/timezones/src'),
        ]);
    }

    public function register()
    {
        include __DIR__.'/routes/web.php';
        $this->app->make('Laraveldaily\Timezones\TimezonesController');
    }
}

