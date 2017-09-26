<?php
namespace  app\admin\validate;
use  think\Validate;
class Cate extends Validate{
//    验证规则
    protected $rule=[
        'name'=> 'require|unique:cate'
    ];
//  验证信息
    protected  $message=[
        'name.require'=>'分类名称必须填写',
        'name.unique'=>'分类名称必须唯一'
    ];
//验证场景
    protected   $scene=[
        'add'=>['name'],
        'edit'=>['name']
    ];
}