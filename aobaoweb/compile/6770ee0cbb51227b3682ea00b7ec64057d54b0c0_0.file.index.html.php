<?php
/* Smarty version 3.1.30, created on 2018-04-18 16:53:54
  from "D:\download\wamp\www\aobaoweb\templates\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad75c024df6e4_63255834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6770ee0cbb51227b3682ea00b7ec64057d54b0c0' => 
    array (
      0 => 'D:\\download\\wamp\\www\\aobaoweb\\templates\\admin\\index.html',
      1 => 1524034016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad75c024df6e4_63255834 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>后台主页</title>

    <link rel="shortcut icon" href="favicon.ico">
    <link href="<?php echo CSS_PATH;?>
bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>
font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>
animate.min.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>
style.min.css?v=4.0.0" rel="stylesheet">
</head>

<style>
    a{
        color: #232323;
        font-weight: bold;
    }
    .tabs {
        position: absolute;
        top: 20px;
        left: 70px;
        width: 100px;
        padding-left: 15px;
        font-size: 18px;
        line-height: 18px;
    }

    .tx {
        width: 80px;
        height: 80px;
    }
</style>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close">
            <i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle tx" src="<?php echo IMG_PATH;?>
tx1.jpg"/></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                 <span class="block m-t-xs"><strong class="font-bold"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</strong></span>
                                 <span class="text-muted text-xs block">
                                     超级管理员
                                     <b class="caret"></b>
                                 </span>
                            </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li>
                                <a class="J_menuItem" href="profile.html">个人资料</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="index.php?a=out">安全退出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">C+</div>
                </li>

                <li>
                    <a href="index.php?f=update&a=checkpass" target="iframe0">
                        <i class="fa fa-edit"></i>
                        <span class="nav-label">修改密码</span>
                        <span class="fa arrow"></span>
                    </a>
                </li>
                <li>
                    <a href="index.php?f=update&a=cation" target="iframe0">
                        <i class="fa fa fa-bar-chart-o "></i>
                        <span class="nav-label">首页管理</span>
                        <span class="fa arrow"></span>
                    </a>
                </li>
                <li>
                    <a href="index.php?f=news" target="iframe0">
                        <i class="fa fa-line-chart"></i>
                        <span class="nav-label">新闻管理</span>
                        <span class="fa arrow"></span>
                    </a>
                </li>
                <li>
                    <a href="index.php?f=comment&a=comment" target="iframe0">
                        <i class="fa fa-line-chart"></i>
                        <span class="nav-label">预约评论管理</span>
                        <span class="fa arrow"></span>
                    </a>
                </li>
                <li>
                    <a href="index.php?f=content&a=content" target="iframe0">
                        <i class="fa fa-pie-chart"></i>
                        <span class="nav-label">联系留言管理</span>
                        <span class="fa arrow"></span>
                    </a>
                </li>

            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->

    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <a target="_blank" href="index.php?m=index&f=index">
                    <div class="tabs">
                        <span>前台首页</span>
                    </div>
                </a>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown hidden-xs">
                        <a class="right-sidebar-toggle" aria-expanded="false">
                            <i class="fa fa-tasks"></i> 主题
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--内容开始-->
        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="index.php?f=news"    frameborder="0">
            </iframe>
        </div>
    </div>
    <!--右侧部分结束-->

    <!--右侧边栏开始-->
    <div id="right-sidebar">
        <div class="sidebar-container">
            <ul class="nav nav-tabs navs-3">
                <li class="active">
                    <a data-toggle="tab" href="#tab-1">
                        <i class="fa fa-gear"></i> 主题
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="skin-setttings">
                        <div class="title">主题设置</div>
                        <div class="setings-item">
                            <span>收起左侧菜单</span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox"
                                           id="collapsemenu">
                                    <label class="onoffswitch-label" for="collapsemenu">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                            <span>固定顶部</span>

                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox"
                                           id="fixednavbar">
                                    <label class="onoffswitch-label" for="fixednavbar">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                                <span>
                        固定宽度
                    </span>

                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox"
                                           id="boxedlayout">
                                    <label class="onoffswitch-label" for="boxedlayout">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="title">皮肤选择</div>
                        <div class="setings-item default-skin nb">
                                <span class="skin-name ">
                         <a href="#" class="s-skin-0">
                             默认皮肤
                         </a>
                    </span>
                        </div>
                        <div class="setings-item blue-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-1">
                            蓝色主题
                        </a>
                    </span>
                        </div>
                        <div class="setings-item yellow-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-3">
                            黄色/紫色主题
                        </a>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--右侧边栏结束-->


</div>

</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js?v=2.1.4"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
bootstrap.min.js?v=3.3.5"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/metisMenu/jquery.metisMenu.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/layer/layer.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
hplus.min.js?v=4.0.0"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
contabs.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/pace/pace.min.js"><?php echo '</script'; ?>
>
</html><?php }
}
