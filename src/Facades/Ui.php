<?php

namespace Coleus\Ui\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Coleus\Ui\Ui
 */
class Ui extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Coleus\Ui\Ui::class;
    }
}
