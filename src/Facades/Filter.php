<?php

namespace Cartrabbit\Hook\Facades;

use Cartrabbit\Framework\Facades\Facade;

class Filter extends Facade
{
    /**
     * Return the service provider key responsible for the filter class.
     * The key must be the same as the one used when registering
     * the service provider.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'filter';
    }
}
