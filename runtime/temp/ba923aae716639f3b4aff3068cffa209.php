<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"G:\shop\tp5\public/../application/admin\view\images\index.html";i:1506338896;s:61:"G:\shop\tp5\public/../application/admin\view\common\left.html";i:1506336174;}*/ ?>
<?php echo widget('Common/header'); ?>
<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Admin/index'); ?>">
                                    <span class="menu-text">
                                        管理员列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-list-ul"></i>
                <span class="menu-text">分类管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Cate/index'); ?>">
                                    <span class="menu-text">
                                       商品分类
                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-list-ol"></i>
                <span class="menu-text">商品管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Goods/index'); ?>">
                                    <span class="menu-text">
                                        商品列表
                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-list-ol"></i>
                <span class="menu-text">订单管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Item/index'); ?>">
                                    <span class="menu-text">
                                        订单列表
                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-tag"></i>
                <span class="menu-text">图片管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Images/index'); ?>">
                                    <span class="menu-text">
                                        图片列表
                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文章管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Article/index'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /Sidebar Menu -->
</div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo url('Index/index'); ?>">系统</a>
                    </li>
                    <li class="active">图片管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body"><button type="button" tooltip="添加图片" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url("Images/add",['id'=>$id]); ?>'"> <i class="fa fa-plus"></i> Add
                </button>
                <div class="row">i
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover">
                                        <thead class="">
                                        <tr>
                                            <th class="text-center">图片ID</th>
                                            <th class="text-center">商品名称</th>
                                            <th class="text-center">图片</th>
                                            <th class="text-center">是否为封面</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data as $v): ?>
                                        <tr>
                                            <td align="center"><?php echo $v['image_id']; ?></td>
                                            <td align="center"><?php echo $v['goods_name']; ?></td>
                                            <td align="center">
                                                <img src="<?php echo $v['image_s_url']; ?>" alt="">
                                            </td>
                                            <td align="center"><?php echo $v['is_face']; ?></td>
                                            <td align="center">
                                                <?php if(($v['is_face'] != 1)): ?>
                                                <a href="<?php echo url('Images/set',['i'=>$v['image_id'],'id'=>$v['goods_id']]); ?>" class="btn btn-primary btn-sm shiny">
                                                <i class="fa fa-edit"></i> 设为封面
                                                </a>
                                                <?php endif; ?>
                                                <a href="<?php echo url('Goods/index'); ?>" class="btn btn-danger btn-sm shiny">

                                                    <i class="fa fa-trash-o"></i> 返回
                                                </a>
                                                <!--tp3不支持$v.id 这种写法-->
                                                <a href="#" onClick="warning('确实要删除吗', '<?php echo url('Images/del',['i'=>$v['image_id']]); ?>')" class="btn btn-danger btn-sm shiny">

                                                <i class="fa fa-trash-o"></i> 删除
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--分页-->


            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
</div>

<!--Basic Scripts-->
<script src="__STATIC__/admin/style/jquery_002.js"></script>
<script src="__STATIC__/admin/style/bootstrap.js"></script>
<script src="__STATIC__/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__STATIC__/admin/style/beyond.js"></script>



</body></html>