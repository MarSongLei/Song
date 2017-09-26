<?php
namespace  app\index\controller;
use think\Controller;
class Product extends  Controller{
    public  function  product(){
        return $this->fetch('product/product');
    }
}