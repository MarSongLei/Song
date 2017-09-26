<?php
namespace  app\index\controller;
use think\Controller;
class User extends  Controller{
    public function index(){
        return $this->fetch();
    }
    public function  sendSms(){
        $mobile=input('mobile');
        $demo=new \php\api_demo\SmsDemo("LTAICzCe7E5GfaqB","qWXPsURHRTOWtitQHmaDGlBOOOYzlO");
//        var_dump($demo);exit;
        $response = $demo->sendSms(
            "宋磊", // 短信签名
            "SMS_99230034", // 短信模板编号
            "18850556996", // 短信接收者
            Array(  // 短信模板中字段的值
                "code"=>"9101234".'这是个神奇的地方',
//        "product"=>"dsd"
            ),
            "123"
        );
        $arr=(array)$response;
        if($arr['Code']=="OK"){
            return  json(
                [
                    'status'=>'success',
                    'msg'=>'发送成功'
                ]
            );
        }

    }
    public function  text(){

    }
}
