<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"G:\shop\tp5\public/../application/index\view\products\products.html";i:1506359571;}*/ ?>
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
    <link rel="stylesheet" href="__STATIC__/index/css/concent.css">
    <script src="__STATIC__/index/js/concent.js"></script>
</head>
<body>
<!--头部-->
<div id="header" style="z-index: 100;height: 80px;position: relative">
    <?php echo widget('Common/header'); ?>
</div>
<div class="clear"></div>
<!--主体-->
<div class="content_main">
       <div class="m_top">
           <div class="main_box z">
               <!--选项-->
                <div class="m_check z">
                    <div class="check check1"><a href="#"><img src="__STATIC__/index/image/concent1.jpg" alt=""></a></div>
                    <div class="check"><a href="#"><img src="__STATIC__/index/image/concent2.jpg" alt=""></a></div>
                    <div class="check"><a href="#"><img src="__STATIC__/index/image/concent3.jpg" alt=""></a></div>
                    <div class="check"><a href="#"><img src="__STATIC__/index/image/concent4.jpg" alt=""></a></div>
                </div>
            <!--轮播内容-->
           <div class="main_wra z">
               <div class="main_im"><img src="__STATIC__/index/image/concent1.jpg" alt=""></div>
               <div class="main_im"><img src="__STATIC__/index/image/concent2.jpg" alt=""></div>
               <div class="main_im"><img src="__STATIC__/index/image/concent3.jpg" alt=""></div>
               <div class="main_im"><img src="__STATIC__/index/image/concent4.jpg" alt=""></div>
           </div>
               <!--隐藏部分轮播-->
               <!--<div class="main_hide">-->
                   <!--<div class="hide_box">-->
                       <!--<div class="hide_le"></div>-->
                       <!--<div class="hide_ri"></div>-->
                       <!--<div class="hide_wra">-->
                           <!--<div class="hide_im"><img src="image/concent1.jpg" alt=""></div>-->
                           <!--<div class="hide_im"><img src="image/concent2.jpg" alt=""></div>-->
                           <!--<div class="hide_im"><img src="image/concent3.jpg" alt=""></div>-->
                           <!--<div class="hide_im"><img src="image/concent4.jpg" alt=""></div>-->
                       <!--</div>-->
                   <!--</div>-->
               <!--</div>-->
           </div>
           <div class="m_top_r z">
               <div class="m_r_top">
                   <div class="le z">
                       <p class="p1">Maruzen</p>
                       <p class="p2">日本品牌魔芋丝</p>
                   </div>
                   <div class="ri y">
                       <div class="hua">4.9</div>
                       <p class="p3"><a href="">46</a>个人评论</p>
                   </div>
                   <div class="clear"></div>
                   <div class="tex">Q弹有嚼劲且易有饱腹感，0脂肪，想要美味营养、
                       低热量又能饱腹的食材，非魔芋丝莫属。
                   </div>
                   <div class="m_foot">
                       ￥7.00
                   </div>
               </div>
               <div class="m_down">
                    <div class="d_list">
                        <div class="list_t z">规格</div>
                        <div class="list_t z">保存方式</div>
                        <div class="list_t z">保质期</div>
                        <div class="clear"></div>
                        <div class="list_d z">330g/份</div>
                        <div class="list_d z">0-4℃冷藏</div>
                        <div class="list_d list_d1 y">1年</div>
                    </div>
                   <div class="t4 z" style="margin-right: 0">
                       <a href="" class="ym_cart_decrease" style="height: 40px"><span class="a_sp">-</span></a>
                       <input type="text" value="1" style="width: 50px;height: 40px">
                       <a href="" class="ym_cart_increase"style="height: 40px"><span class="a_sp">+</span></a>
                   </div>
                   <div class="tf_ri_btn y">
                       <a href="#"><i class="s1 z"></i>订单详情</a>
                   </div>
               </div>
           </div>
    </div>
    <div class="clear"></div>
</div>
<!--静态部分-->
<div class="c_img">
    <div class="i_share"><a href=""></a>
        <div class="qq">
            <div class="triangle"></div>
            <p class="font_color"><span></span><a href="">QQ空间</a></p>
            <p class="font_color"><span class="sp1"></span><a href="">新浪微博</a></p>
        </div></div>

    <div class="i_like"><a href=""></a></div>

</div>
<div class="car_main">
    <div class="main_l z">
        <div class="report z">检验报告</div>
        <div class="r_none z">做个选择</div>
        <div class="clear"></div>
        <div class="rest_l z">
            <p class="p1"><a href=""></a></p>
            <p>其他权威检测</p>
        </div>
        <div class="rest_r z"></div>
    <div class="clear"></div>
    <div class="main_r z">

    </div>
</div>
<div class="clear"></div>

<!--底部-->
<div id="footer" style="position: relative">
    <?php echo widget('Common/footer'); ?>
</div>
<!--返回顶部-->
<div class="toTop"></div>
<a href="" class="kefu"></a>
</div>
</body>
</html>
