<?php
namespace  app\admin\validate;

use  think\Validate;

class Item extends Validate{
//    验证规则
    protected $rule=[
        'order_id'=> 'require|unique:item',
        'goods_id'=> 'require|unique:item',
        'goods_num'=> 'require',
        'goods_price'=>'require',
];
//  验证信息
    protected  $message=[
        'order_id.require'=>'订单ID必须填写',
        'order_id.unique'=>'订单ID必须唯一',
        'goods_id.require'=>'订单编号必须填写',
        'goods_id.unique'=>'编号必须唯一',
         'goods_num.require'=>'订单数量必须填写',
        'goods_price.require'=>'订单价格必须填写',

    ];
//验证场景
    protected
        $scene=[
        'add'=>['order_id','goods_id','goods_num','goods_price'],
        'edit'=>['order_id','goods_id','goods_num','goods_price'],
    ];
}