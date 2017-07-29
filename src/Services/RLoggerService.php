<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 20/07/17
 * Time: 22:42
 */

namespace RLogger\Services;


use RLogger\Models\RLogger;

class RLoggerService
{
    public function log(\Exception $exception, $user_id = null, $http_code = null)
    {
        $data['id']             = uniqid();
        $data['message']        = $exception->getMessage();
        $data['file']           = $exception->getFile();
        $data['line']           = $exception->getLine();
        $data['stacktrace']     = $exception->getTraceAsString();
        $data['exception_type'] = get_class($exception);
        $data['user_agent']     = $_SERVER['HTTP_USER_AGENT'];
        $data['url']            = url($_SERVER['REQUEST_URI']);
        $data['user_id']        = $user_id;
        $data['http_code']      = $http_code;
        $data['trace_json']     = json_encode($data);
        return RLogger::create($data);
    }
}