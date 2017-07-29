<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 20/07/17
 * Time: 22:42
 */

namespace RLogger\Traits;

use RLogger\Facades\RLoggerFacade as RLogger;
use Auth;

trait RLoggerReport
{
    public function rlog(\Exception $exception)
    {
        try {
            if ($this->shouldReport($exception))
                RLogger::log($exception, Auth::check() ? Auth::user()->id : null, http_response_code());
        } catch (\Exception $ex) {
            return parent::report($ex);
        }

        if (!config('rlogger_laravel_report'))
            return parent::report($exception);

        return true;
    }

}