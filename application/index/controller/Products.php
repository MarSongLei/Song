<?php
namespace  app\index\controller;
use think\Controller;
class  Products extends  Controller{
    public  function  Detail(){
        return $this->fetch('products/products');
    }
}