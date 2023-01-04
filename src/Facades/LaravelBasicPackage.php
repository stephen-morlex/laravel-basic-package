<?php

namespace Stephenmorlex\LaravelBasicPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Stephenmorlex\LaravelBasicPackage\LaravelBasicPackage
 */
class LaravelBasicPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Stephenmorlex\LaravelBasicPackage\LaravelBasicPackage::class;
    }
}
