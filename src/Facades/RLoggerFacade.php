<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 21/07/17
 * Time: 11:18
 */

namespace RLogger\Facades;


use Illuminate\Support\Facades\Facade;
use RLogger\Services\RLoggerService;

class RLoggerFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return RLoggerService::class;
    }
}