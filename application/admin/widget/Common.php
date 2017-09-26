<?php
namespace  app\admin\widget;
use think\Controller;
class Common extends  Controller{
//    公共控制器
//头部
   public  function  header(){
       return $this->fetch('common/header');
   }
//   左边
  public  function  left(){
       return $this->fetch('common/left');
  }
}