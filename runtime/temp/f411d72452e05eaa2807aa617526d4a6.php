<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"G:\shop\tp5\public/../application/index\view\shopCar\shopCar.html";i:1506358764;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel='icon' href='__STATIC__/index/image/favicon.ico' type='image/x-icon' />
    <link rel='shortcut icon' href='__STATIC__/index/image/favicon.ico' type='image/x-icon' />
    <link rel="stylesheet" href="__STATIC__/index/css/common.css">
    <link rel="stylesheet" href="__STATIC__/index/css/product.css">
    <script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
    <script src="__STATIC__/index/js/product.js"></script>
    <script  src="__STATIC__/index/js/back_top.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/css/shop_car.css">
    <script src="__STATIC__/index/js/shop_car.js"></script>
</head>
<body>
<!--头部-->
<div id="header" style="z-index: 100;height: 80px;position: relative">
    <?php echo widget('Common/header'); ?>
</div>
<div class="clear"></div>
<!--购物车主体-->
<div class="car_main">
    <div class="car">
       <div class="car_title">
           <h1 class="car_tex z"><i class="icons"></i>购物车</h1>
           <table class="y">
               <tr>
                   <td class=" ym_step ym_step1 "><span class="step">1</span><a href="#">购物篮</a></td>
                   <td class="ym_arrow"></td>
                   <td class="ym_step"><span class="step">1</span><a href="#">结账</a></td>
                   <td class="ym_arrow"></td>
                   <td class="ym_step"><span class="step">1</span><a href="#">收银台</a></td>
               </tr>
           </table>
       </div>
        <div class="car_body">
            <table>
                <thead>
                <tr>
                    <th class="t_one"><input type="checkbox" class="select_all"  checked="checked"  name="selectAll">
                   </th>
                    <th class="t_img">商品</th>
                    <th class="t_tex"></th>
                    <th class="t_three">售价</th>
                    <th class="t4">数量</th>
                    <th class="t_three">小计</th>
                    <th class="t6">操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="t_one">
                        <input type="checkbox" id="checkAll"  checked="checked"  class="car_check select_all">
                    </td>
                    <td class="t_img"><img src="image/douya.jpg" alt=""></td>
                    <td class="t_tex">生态种植黄豆芽</td>
                    <td class="t_three">￥10</td>
                    <td class="t4"><div>
                       <span class="a_sp">-</span>
                        <input type="text" value="1" id="a_inp">
                      <span class="a_sb">+</span>
                    </div></td>
                    <td class="t_three">10<span class="price"></span></td>
                    <td class="t6"><div class="car_delet"><a href=""></a></div></td>
                </tr>
                </tbody>
                <tfoot style="background-color:#ebedf0">
                     <tr>
                         <td style="height: 100px;width: 1040px">
                             <div class="tf_btn z"><button>清空购物篮</button></div>
                             <div class="tf_btu z"><button>删除勾选</button></div>
                             <div class="tf_ri y">
                                 <div class="tf_ri_tex z">
                                     <p class="p1">订单金额</p>
                                     <p class="p2"><span>￥</span> 10.00</p>
                                     <p class="p3">不含运费</p>
                                 </div>
                                 <div class="tf_ri_btn z">
                                     <a href="#"><i class="s1 z"></i>订单详情</a>
                                 </div>
                             </div>
                         </td>
                     </tr>
                </tfoot>
            </table>
            <div class="car_float">
                <div class="car_l"></div>
                <div class="car_c"></div>
                <div class="car_r"></div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!--底部-->
<div id="footer" style="clear: both">
    <?php echo widget('Common/footer'); ?>
</div>
<!--返回顶部-->
<div class="toTop"></div>
<a href="" class="kefu"></a>
</body>
</html>
