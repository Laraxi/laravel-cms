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

class LoginController extends Controller
{

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $user = AdminService::login($request->all());
            AdminService::json(0, '登录成功', $user);
        } else {
            return view('admin.login');
        }
    }

}