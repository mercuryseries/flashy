<?php

namespace MercurySeries\Flashy;

use Illuminate\Support\Facades\Facade;

class Flashy extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flashy';
    }
}
