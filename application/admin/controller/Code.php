<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 19:05
 */

namespace app\admin\controller;

use think\Controller;

use think\captcha\Captcha;

class Code extends Controller
{
//生成验证码
    public function makeCode()
    {
        $captcha= new Captcha();

        return $captcha->entry();

    }
}
