<?php
namespace app\admin\validate;
use  think\Validate;
class Goods extends Validate{
//    验证规则
    protected $rule=[
        'goods_name'=>'require|unique:goods',
        'cate_id'=>'require',
        'sell_price'=>'require',
        'market_price'=>'require',
        'store'=>'require',
        'keywords'=>'require',
        'desc'=>'require',
    ];
//    验证信息
protected  $message=[
      'goods_name.require'=>'商品名称必须填写',
      'goods_name.unique'=>'商品名称必须唯一',
       'cate_id.require'=>'商品分类必须选择',
       'sell_price.require'=>'销售价格必须填写',
       'market_price.require'=>'市场价格必须填写',
       'store.require'=>'库存必须填写',
       'keywords.require'=>'关键词必须填写',
       'desc.require'=>'商品摘要必须填写'
];
//验证场景
protected  $scene=[
    'add'=>['goods_name','cate_id','sell_price','market_price','store','keywords','desc'],
    'edit'=>['goods_name','cate_id']
];
}