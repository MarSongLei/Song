<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 19:21
 */

namespace app\admin\validate;

use think\Validate;

class Admin extends Validate{

    protected $rule = [
        'username'  => 'require|max:25|unique:manager',
        'password' => 'require|min:6',
    ];

    protected $message  =   [
        'username.require' => '用户名必须填写',
        'username.max'     => '名称最多不能超过25个字符',
//        'username.min'   => '名称不能少于6个字符',
        'password.require' => '密码必须填写',
        'password.min'   => '密码不能少于6个字符',
//        'password.number'   => '名称最多不能少于6个字符',
    ];
//

//    验证场景
    protected $scene = [
        'edit'  =>  ['username'],
        'add'  =>  ['username','password'],
    ];







}