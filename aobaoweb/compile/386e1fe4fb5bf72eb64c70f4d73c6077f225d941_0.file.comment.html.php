<?php
/* Smarty version 3.1.30, created on 2018-04-18 11:11:04
  from "D:\download\wamp\www\aobaoweb\templates\admin\comment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad70ba8150989_23810416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '386e1fe4fb5bf72eb64c70f4d73c6077f225d941' => 
    array (
      0 => 'D:\\download\\wamp\\www\\aobaoweb\\templates\\admin\\comment.html',
      1 => 1524021716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad70ba8150989_23810416 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="<?php echo CSS_PATH;?>
bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>
font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>
plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>
animate.min.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>
style.min.css?v=4.0.0" rel="stylesheet">
    <base target="_blank">
</head>
<style>
    table{
        border-bottom:1px solid #dedede ;
    }
    .aa{
        position: absolute;
        margin-left: 80px;
        margin-top: -12.5px;
    }
    .ibox-title{
       height: 60px;
        line-height: 60px;
    }
    .ibox-title h5{
        line-height: 30px;
    }

    .btn-group a .active{
        color: #6d6b6b;
    }
</style>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>预约试驾管理</h5>
                    <span class="input-group-btn aa">
                        <!--<a href="index.php?f=content&a=addcontent" target="iframe0">-->
                            <!--<button type="button" class="btn btn-sm btn-primary">增加</button>-->
                        <!--</a>-->
                    </span>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>车型</th>
                                <th>车系</th>
                                <th>经销商省</th>
                                <th>经销商</th>
                                <th>姓名</th>
                                <th>性别</th>
                                <th>手机号码</th>
                                <th>预约时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'time');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['time']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['time']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['time']->value['type'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['time']->value['xilie'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['time']->value['province'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['time']->value['jingxiao'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['time']->value['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['time']->value['sex'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['time']->value['phone'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['time']->value['date'];?>
</td>
                                <td>
                                    <span class="input-group-btn">
                                    <a href="index.php?f=comment&a=delcomment&id=<?php echo $_smarty_tpl->tpl_vars['time']->value['id'];?>
" target="iframe0">
                                        <button type="button" class="btn btn-sm btn-primary">删除</button>
                                        </a>
                                 </span>
                                    <span class="input-group-btn">
                                        <a href="index.php?f=comment&a=updatecom&id=<?php echo $_smarty_tpl->tpl_vars['time']->value['id'];?>
" target="iframe0" >
                                            <button type="button" class="btn btn-sm btn-primary">修改</button>
                                        </a>
                                 </span>
                                </td>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </tbody>
                        </table>
                    </div>

                   <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                </div>
            </div>
        </div>
    </div>
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
plugins/peity/jquery.peity.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
content.min.js?v=1.0.0"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
demo/peity-demo.min.js"><?php echo '</script'; ?>
>
</html><?php }
}
