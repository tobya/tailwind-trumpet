<?php

namespace Tobya\TailwindTrumpet\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tobya\TailwindTrumpet\TailwindTrumpet
 */
class TailwindTrumpet extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Tobya\TailwindTrumpet\TailwindTrumpet::class;
    }
}
