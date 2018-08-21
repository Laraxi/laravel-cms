<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2018/8/21
 * Time: 17:20
 */

namespace App\Services;


class BaseService
{
    public static function get($key = null, $default = null)
    {
        return request()->get($key, $default);

    }

    public static function post($key = null, $default = null)
    {
        return request()->post($key, $default);
    }

    public static function json($code = null, $message = null, $data = [])
    {
        exit(json_encode([
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ]));

    }


}