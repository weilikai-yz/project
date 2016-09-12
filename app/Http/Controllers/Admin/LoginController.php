<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //登录表单
    public function login()
    {
    	return "登录表单";
    }

    //执行登录
    public function doLogin()
    {
    	return "执行登录";
    }

    //执行退出
    public function logout()
    {
    	return "执行退出";
    }

    //验证码
    public function captcha($tmp)
    {
    	return "验证码";
    }

}
