<?php

namespace JoydeepBhowmik\UI;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/ui-config.php' => config_path('ui-config.php'),
        ], 'ui-config');
    }
}
