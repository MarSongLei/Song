<?php
namespace  app\index\controller;
use think\Controller;
class  Shopcar extends Controller{
    public  function  shopCar(){
        return $this->fetch('shopCar/shopCar');
    }
}