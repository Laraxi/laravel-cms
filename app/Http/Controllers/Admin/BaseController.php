<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2018/8/21
 * Time: 17:33
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Services\AdminService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function json($code = null, $message = null, $data = [])
    {
        return response()->json([
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ]);
    }

    public static function get($key = null, $default = null)
    {
        return request()->get($key, $default);

    }

    public static function post($key = null, $default = null)
    {
        return request()->post($key, $default);
    }

}