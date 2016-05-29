<?php

namespace Migmae\ClaravelLocalization\Facades;

use Illuminate\Support\Facades\Facade;

class ClaravelLocalization extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'claravellocalization';
    }
}
