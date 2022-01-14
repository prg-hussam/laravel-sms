<?php

namespace Prgayman\Sms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array getDrivers()
 * @method static string|null getDefaultDriver()
 * @method static void setDefaultDriver(string $name)
 * @method static \Prgayman\Sms\Contracts\DriverInterface driver(string|null $name = null)
 * @method static \Prgayman\Sms\Contracts\DriverInterface to(string $mobile)
 * @method static \Prgayman\Sms\Contracts\DriverInterface from(string $senderName)
 * @method static \Prgayman\Sms\Contracts\DriverInterface message(string $text)
 * @method static string getTo()
 * @method static string getFrom()
 * @method static string getMessage()
 * @method static \Prgayman\Sms\Contracts\DriverInterface send()
 * 
 * @see \Prgayman\Sms\SmsManager
 */

class Sms extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sms.manager';
    }
}
