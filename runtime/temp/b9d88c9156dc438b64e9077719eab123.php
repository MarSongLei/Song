<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"G:\shop\tp5\public/../application/admin\view\images\add.html";i:1506184351;}*/ ?>
<?php echo widget('Common/header'); ?>
<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <?php echo widget('Common/left'); ?>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="#">系统</a>
                    </li>
                    <li>
                        <a href="<?php echo url('Images/index'); ?>">图片管理</a>
                    </li>
                    <li class="active">添加图片</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">新增商品图片</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" action="<?php echo url('Images/add'); ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">图片选择</label>
                                            <div class="col-sm-6">
                                                <input  id="username" placeholder="" name="image" required="" type="file" style="outline: none">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <!--<div class="form-group">-->
                                            <!--<label for="group_id" class="col-sm-2 control-label no-padding-right">是否为封面</label>-->
                                            <!--<div class="col-sm-6">-->
                                                <!--<select name="group_id" style="width: 100%;">-->
                                                    <!--<option selected="selected" value="8">是</option>-->
                                                    <!--<option selected="selected" value="8">否</option>-->
                                                <!--</select>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">保存信息</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
</div>

<!--Basic Scripts-->
<script src="__STATIC__admin/style/jquery_002.js"></script>
<script src="__STATIC__admin/style/bootstrap.js"></script>
<script src="__STATIC__admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="style/beyond.js"></script>



</body></html>