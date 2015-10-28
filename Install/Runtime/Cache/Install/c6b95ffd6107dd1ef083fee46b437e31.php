<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>安装程序 -- GreenCMS</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<meta name="description" content="GreenCMS"/>
<meta name="keywords" content="GreenCMS"/>
<!-- bootstrap 3.0.2 -->
<link href="/Public/AdminLTE/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- font Awesome -->
<link href="/Public/AdminLTE/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<!-- Ionicons -->
<link href="/Public/AdminLTE/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
<!-- Theme style -->
<link href="/Public/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css"/>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

<![endif]-->


<!-- jQuery 2.0.2 -->
<!--<script type="text/javascript" src="/Public/share/js/jquery-2.0.2.min.js"></script>-->
<script type="text/javascript" src="/Public/share/js/jquery-1.9.0.min.js"></script>


<style>

    .form-group .control-label {

        float: left;
        width: 150px;
        padding-top: 5px;
        text-align: right;
    }

    .form-group .controls {

        margin-left: 170px;
    }

    .form-group .controls .radio {
        display: inline;
        padding-left: 0px;
        padding-right: 20px;
        vertical-align: baseline;
    }

    .form-group .controls .large {

        width: 60%;
    }

    .form-group .controls select {

        width: 60%;
    }



    .form-group .controls .form-control {

        display: inline;
    }

    .form-group .controls .help-inline {
        padding-left: 10px;
        color: #595959;
    }

    .form-actions {

        margin-left: 170px;
    }


</style>

</head>
<body class="skin-blue">

<!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="<?php echo U('Admin/index/index');?>" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        GreenCMS安装
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">


        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

         <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="label label-success">1</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">你有1条新消息</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="/Public/baracktocat.jpg" class="img-circle" alt="User Image"/>
                                        </div>
                                        <h4>
                                            GreenCMS Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>欢迎使用</p>
                                    </a>
                                </li>
                                <!-- end message -->

                            </ul>
                        </li>
                        <li class="footer"><a href="#">查看所有消息</a></li>
                    </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-warning"></i>
                        <span class="label label-warning">0</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">你有0条提醒</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <!--<li>-->
                                <!--<a href="#">-->
                                <!--<i class="ion ion-ios7-people info"></i> 5 new members joined today-->
                                <!--</a>-->
                                <!--</li>-->
                                <!---->

                            </ul>
                        </li>
                        <li class="footer"><a href="#">查看所有提醒</a></li>
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="label label-danger">0</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">你有0个任务</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <!-- Task item -->

                                <!--<li>-->
                                <!--<a href="#">-->
                                <!--<h3>-->
                                <!--Design some buttons-->
                                <!--<small class="pull-right">20%</small>-->
                                <!--</h3>-->
                                <!--<div class="progress xs">-->
                                <!--<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
                                <!--<span class="sr-only">20% Complete</span>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--</a>-->
                                <!--</li>-->

                                <!-- end task item -->

                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">查看所有</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span> <?php echo ($user["user_nicename"]); ?> <i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="/Public/baracktocat.jpg" class="img-circle" alt="User Image"/>

                            <p>
                                <?php echo ($user["user_nicename"]); ?> - <?php echo ($user['role_info'][0]['name']); ?>
                                <small>注册时间: <?php echo ($user["user_registered"]); ?></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">One</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Two</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Three</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo U('Admin/Access/profile',array('uid'=>$user['user_id']));?>"
                                   class="btn btn-default btn-flat">用户档案</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo U('Admin/Login/logout');?>" class="btn btn-default btn-flat">安全退出</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="wrapper row-offcanvas row-offcanvas-left">


<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/Public/baracktocat.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">

            </div>
        </div>
        <!-- search form -->
        <!--<form action="#" method="get" class="sidebar-form">-->
        <!--<div class="input-group">-->
        <!--<input type="text" name="q" class="form-control" placeholder="Search..."/>-->
        <!--<span class="input-group-btn">-->
        <!--<button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>-->
        <!--</span>-->
        <!--</div>-->
        <!--</form>-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">


            <li class=""><a>使用协议书</a></li>
            <li class="active"><a>环境测试</a></li>
            <li class=""><a>网站设置</a></li>
            <li class=""><a>安装</a></li>
            <li class=""><a>安装完成</a></li>


        </ul>


    </section>
    <!-- /.sidebar -->
</aside>


<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">

<div class="row">
<div class="col-md-12">

<!-- /.box-header -->
<div class="box-body">


    <div class="span12">
        <!--BEGIN TABS-->
        <div class="tabbable tabbable-custom tabbable-full-width">
            <div class="tab-content">
                <div class="tab-pane row-fluid active" id="tab_1_1">
                    <div class="span9">
                        <div class="portlet box light-grey">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-globe"></i>服务器信息
                                </div>
                            </div>
                            <div class="portlet-body">
                                <form method="post">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th class="hidden-240">参数</th>
                                            <th class="hidden-240">值</th>
                                        </tr>
                                        </thead>
                                        <tbody id="server_info">
                                        <tr>
                                            <td><strong>服务器域名</strong></td>
                                            <td><?php echo ($sp_name); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>服务器操作系统</strong></td>
                                            <td><?php echo ($os_name); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>服务器解译引擎</strong></td>
                                            <td><?php echo ($server_software); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>PHP版本</strong></td>
                                            <td><?php echo ($php_version); ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>系统安装目录</strong></td>
                                            <td><?php echo ($web_root); ?></td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </form>
                            </div>

                        </div>
                        <!--end span9-->
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane row-fluid active" id="tab_1_2">
                        <div class="span9">
                            <div class="portlet box light-grey">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-globe"></i>系统环境检测
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <form method="post">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th class="hidden-240">需开启的变量或函数</th>
                                                <th class="hidden-240">要求</th>
                                                <th class="hidden-240">实际状态及建议</th>
                                            </tr>
                                            </thead>
                                            <tbody id="system_env">
                                            <tr>
                                                <td>safe_mode</td>
                                                <td align="center">Off</td>
                                                <td><?php echo $sp_safe_mode; ?>
                                                    <small>(本系统不支持在<span class="STYLE2">非win主机的安全模式</span>下运行)</small>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>GD 支持</td>
                                                <td align="center">On</td>
                                                <td><?php echo ($sp_gd); ?>
                                                    <small>(不支持将导致与图片相关的大多数功能无法使用或引发警告)</small>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>MySQL 支持</td>
                                                <td align="center">On</td>
                                                <td><?php echo ($sp_mysql); ?>
                                                    <small>(不支持无法使用本系统)</small>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </form>


                                </div>

                            </div>
                            <!--end span9-->
                        </div>
                        <!--end tab-pane-->
                        <div class="tab-pane row-fluid active" id="tab_1_3">
                            <div class="span9">
                                <div class="portlet box light-grey">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-globe"></i>目录权限检测
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form method="post">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="hidden-240">目录名</th>
                                                    <th class="hidden-240">读取权限</th>
                                                    <th class="hidden-240">写入权限</th>
                                                </tr>
                                                </thead>
                                                <tbody id="dir_mod">
                                                <?php
 foreach($sp_testdirs as $d) { ?>
                                                <tr>
                                                    <td><?php echo $d; ?></td>
                                                    <?php
 $fulld = $web_root.str_replace('/*','',$d); $rsta = (is_readable($fulld) ? '<font color=green>
                                                    [√]读</font>' : '<font color=red>[×]读</font>'); $wsta = (test_write($fulld) ? '<font color=green>[√]写</font>' : '<font color=red>[×]写</font>'); echo "
                                                    <td>$rsta</td>
                                                    <td>$wsta</td>
                                                    \r\n"; ?>
                                                </tr>
                                                <?php
 } ?>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <div class="form-actions row margin">
                                                <div class="row margin">

                                                    <button type="button" class="btn bg-red" id="step1">
                                                        <i class="m-icon-swapright m-icon-white"></i>
                                                        后退
                                                    </button>

                                                    <button type="button" class="btn btn-info" id="step3">
                                                        <i class="m-icon-swapright m-icon-white"></i>继续
                                                    </button>


                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <!--end span9-->
                            </div>
                            <!--end tab-pane-->
                        </div>
                    </div>
                    <!--END TABS-->
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->


</div>
</div>
 </div>


</section>
<!-- /.content -->
</aside>
<!-- /.right-side -->
</div>
<!-- ./wrapper -->

<!-- Bootstrap -->
<script src="/Public/AdminLTE/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="/Public/AdminLTE/js/AdminLTE/app.js" type="text/javascript"></script>

<!-- iCheck -->
<script src="/Public/AdminLTE/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

<script>
    function a_confirm() {
        var msg = "您真的确定要这样做么吗？\n\n请确认！";
//        alert(msg);

        if (confirm(msg) == true) {
            return true;
        } else {
            return false;
        }
    }

</script>


<script>
    $(document).ready(function () {


        $('#check-all').on('ifChecked', function (event) {
            $('input').iCheck('check');
        });
        $('#check-all').on('ifUnchecked', function (event) {
            $('input').iCheck('uncheck');
        });
    });
</script>


<script>
    jQuery(document).ready(function () {
        $('#step3').click(function () {
            window.location.href = '<?php echo U("Install/Index/step3");?>';
        });
        $('#step1').click(function () {
            window.location.href = '<?php echo U("Install/Index/step1");?>';
        });
    });
</script>
</body>
</html>