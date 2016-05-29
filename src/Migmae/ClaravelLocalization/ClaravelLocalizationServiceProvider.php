<?php

namespace Migmae\ClaravelLocalization;

use Illuminate\Support\ServiceProvider;

class ClaravelLocalizationServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('claravellocalization.php'),
        ], 'config');
    }


}
