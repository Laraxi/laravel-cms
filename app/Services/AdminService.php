<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2018/8/21
 * Time: 17:20
 */

namespace App\Services;

use App\Models\User;

class AdminService extends BaseService
{

    public function login($data = [])
    {
        if (!$data['username'])
            return $this->json(-1, '用户名不为空', []);
        if (!$data['password'])
            return $this->json(-2, '密码不为空', []);
        $user = User::where(['username' => $data['username']])->first();
        if (!$user)
            return $this->json(-3, '用户名不正确', []);
        if ($user->password != md5($data['password']))
            return $this->json(-4, '密码不正确', []);
        session()->put('admin_user', $user);
        return $user;
    }

}