<?php
namespace  app\index\widget;

use think\Controller;

class Common extends  Controller{
//    公共控制器
//头部
   public  function  header(){
       return $this->fetch('common/header');
   }
//   左边
  public  function  footer(){
       return $this->fetch('common/footer');
  }
}