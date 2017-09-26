<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 11:20
 */

namespace app\admin\controller;

use think\Controller;

class Login extends Controller{

    public function login(){



        return $this->fetch('login/login');
    }


    public function doLogin(){
//        接收参数
        $data=[
            'username'=>input('username'),
            'password'=>input('password'),
            'code'=>input('code'),
        ];
//        var_dump($data);exit();


//        验证；
        if(!$data['username']){
            return $this->error('用户名不能为空');
        }

        if(!$data['password']){
            return $this->error('密码不能为空');
        }

        if(!$data['code']){
            return $this->error('验证码不能为空');
        }

        if(!captcha_check($data['code'])){
            return $this->error('验证码错误',url('Login/login'));
        }
        $info =db ('manager')->where(array('username'=>$data['username']))->find();

        if (!isset($info)||empty($info)){
            return $this->error('用户名或');
        }
//        $data['password']=md5($data['password']);

        if($info['password']!=md5($data['password'])){

//            var_dump($info['password']);exit();
            return $this->error('密码错误');
        }

        //        登录成功以后。。
//        将用户信息存到session里面

        session('manager',$info);

//        跳转页面
        return $this->success('登录成功',url('Admin/index'));


    }



}