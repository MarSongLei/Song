<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 22:13
 */

namespace  app\admin\controller;

use think\Controller;

class Item extends Controller{

    public function index(){



        return $this->fetch('item/list');
    }


    public function add(){
//   用框架接收参数
        $data=[
            'order_id'=>input('order_id'),
            'goods_id'=>input('goods_id'),
            'goods_num'=>input('goods_num'),
            'goods_price'=>input('goods_price'),
        ];
//用验证器验证

//        验证；--  独立验证
                       //完全限定名称
//            $validate = new \think\Validate([
//                'order_id'=> 'require|unique:item',
//                'goods_id'=> 'require|unique:item',
//                'goods_num'=> 'require',
//                'goods_price'=>'require',
//            ]);
//            if (!$validate->check($data)) {
//              dump($validate->getError());
//                return $this->error($validate->getError());
//            }



        $validate = validate('item');

        if (!$validate->scene('add')->check($data)) {
//                dump($validate->getError());exit();
            return $this->error($validate->getError());
        }

        return $this->fetch();
    }


}