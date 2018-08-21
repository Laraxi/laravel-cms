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

class IndexController extends Controller
{

    public function index(Request $request)
    {

        return view('admin.index.index');

    }

}