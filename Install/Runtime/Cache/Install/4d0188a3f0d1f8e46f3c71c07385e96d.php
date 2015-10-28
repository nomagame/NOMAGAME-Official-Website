<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>安装程序 -- GreenCMS <?php echo ($version); ?></title>

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

            <ul class="sidebar-menu">


                <li class="active"><a>使用协议书</a></li>
                <li class=""><a>环境测试</a></li>
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


                            <div class="row-fluid">
                                <div class="span12">
                                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                                    <h3 class="page-title">
                                        安装程序
                                        <small>&nbsp;&nbsp;GreenCMS</small>
                                    </h3>
                                    <ul class="breadcrumb">
                                        <li>
                                            <a href="">安装程序</a>
                                            <i class="icon-angle-right"></i>
                                        </li>
                                        <li>
                                            <a href="">使用协议书</a>
                                        </li>
                                    </ul>
                                    <!-- END PAGE TITLE & BREADCRUMB-->
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="copyright">
                                    <div class="copy_title">
                                        <h3>阅读许可协议</h3>
                                    </div>
                                    <div class="agreement">
                                        <p>您正在安装的是GreenCMS(UTF-8编码) <?php echo ($version); ?> Release build <?php echo ($build); ?></p>

                                        <p>版权所有 &copy;<?php echo date('Y');?>，<a href="http://green.njtech.edu.cn">GreenStudio GCS Dev Team</a> 保留所有权利。 </p>

                                        <p>
                                            感谢您选择绿荫内容管理系统（以下简称GreenCMS），GreenCMS是南京工业大学绿荫工作室开发的一款美观实用的CMS网站内容管理系统，基于ThinkPHP 3.2框架开发，全部源码开放。
                                            GreenCMS 的官方网址是： <a href="http://www.greencms.net" target="_blank">www.greencms.net</a></p>

                                        <p>使用者：无论个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本许可协议，在理解、同意、并遵守本许可协议的全部条件和条款后，方可开始使用GreenCMS
                                            系列软件产品。：</p><br/>

                                        <p><strong>
                                            一、本授权协议适用于 GreenCMS  <?php echo ($version); ?>  版本，GreenCMS官方拥有对本授权协议的最终解释权。
                                        </strong></p><br/>

                                        <p><strong>二、协议许可的权利 </strong>

                                        <p>

                                        <p>1、您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于非商业用途，而不必支付软件版权授权费用。 </p>

                                        <p>2、您可以在协议规定的约束和限制范围内修改 GreenCMS 源代码或界面风格以适应您的网站要求。 </p>

                                        <p>3、您拥有使用本软件构建的网站全部内容所有权，并独立承担与这些内容的相关法律义务。 </p>
                                        <br/>

                                        <p><strong>三、协议规定的约束和限制 </strong></p>

                                        <p>
                                            GreenCMS是基于ThinkPHP框架开发的系统，遵循Apache 2.0协议 ，允许客户基于本系统继续二次开发，但是系统的核心源码，请保留相关版权注释。
                                        </p>
                                        <br/>

                                        <p><strong>四、免责声明</strong></p>

                                        <p>

                                        <p>1、用户出于自愿而使用本软件，您必须了解使用本软件的风险，且同意自己承担使用本软件的风险。</p>

                                        <p>2、用户利用本软件构建的网站的任何信息内容以及导致的任何版权纠纷和法律争议及后果与绿荫工作室无关，绿荫工作室对此不承担任何责任。</p>

                                        <p>
                                            3、在适用法律允许的最大范围内，绿荫工作室在任何情况下不就因使用或不能使用本软件所发生的特殊的、意外的、非直接或间接的损失承担赔偿责任（包括但不限于，资料损失，资料执行不精确，或应由您或第三人承担的损失，或本程序无法与其他程序运作等）。即使用户已事先被绿荫工作室告知该损害发生的可能性。</p>
                                        </p>
                                        <br/><br/>

                                        <p><b>协议发布时间：</b> 2013年11月11日</p>

                                        <p><b>版本最新更新：</b> 2015年02月01日 By <a href="http://green.njtech.edu.cn">GreenStudio</a></p><br/>

                                        <div class="control-group">
                                            <div class="controls">
                                                <input type="checkbox" value="" name="readpact" id="readpact" checked="checked"/>&nbsp;&nbsp;&nbsp;&nbsp;我已经阅读并同意此协议
                                            </div>
                                        </div>
                                        <div class="form-actions">
								<span style="font-size: 18px; color: red; font-weight: bold;"
                                      id="success"></span>
                                            <button type="button" class="btn blue submit" id='do_next'>
                                                <i class="icon-ok"></i> 继续
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>



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
        $('#do_next').click(function () {
            if (document.getElementById('readpact').checked == true) {
                //$.dialog.tips('正在进行环境配置检测，请勿关闭浏览器...',60);
                window.location.href = '<?php echo U("Install/Index/step2");?>';
            }
            else {
                alert('您必须同意软件许可协议才能安装！');
                //$.dialog.alert('您必须同意软件许可协议才能安装！');
            }
        });
    });
</script>
</body>
</html>