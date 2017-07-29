<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 20/07/17
 * Time: 19:54
 */

namespace RLogger\Models;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class RLogger extends Model
{
    protected $table = 'rlogger';
    protected $fillable
        = [
            'id',
            'user_id',
            'message',
            'file',
            'line',
            'stacktrace',
            'trace_json',
            'user_agent',
            'url',
            'exception_type'
        ];
    public $incrementing = false;

}