<?php

namespace Lianmaymesi\LaraInstaller\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lianmaymesi\LaraInstaller\LaraInstaller
 */
class LaraInstaller extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lara-installer';
    }
}
