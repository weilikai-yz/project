<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//引入对应的命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Session;

class CodeController extends Controller
{
    //负责输出验证码程序
    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        
        // echo $phrase;

        //把内容存入session
        Session::flash('mycode', $phrase);

        // echo '<hr>';
        // echo Session::get("mycode");
        // echo '<hr>';

        // exit();

        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
        exit();
}
}
