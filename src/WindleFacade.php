<?php

namespace Kamaroolkarim\Windle;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kamaroolkarim\Windle\Windle
 */
class WindleFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'windle';
    }
}
