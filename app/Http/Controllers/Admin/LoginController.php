<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2018/8/21
 * Time: 17:33
 */

namespace App\Http\Controllers\Admin;

use App\Services\AdminService;
use Illuminate\Http\Request;

class LoginController extends BaseController
{
    public $data = null;

    public function __construct()
    {
        $this->data = new AdminService();
    }
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->data->login($request);
            return $this->json(0, '登录成功');
        } else {
            return view('admin.login');
        }
    }
}