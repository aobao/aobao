<?php
/* Smarty version 3.1.30, created on 2018-04-18 08:32:27
  from "D:\wamp\www\aobaoweb\templates\admin\news.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6e67bd2bbf4_78662709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe20e989750922b06ecc7af3f6b6d4534e934710' => 
    array (
      0 => 'D:\\wamp\\www\\aobaoweb\\templates\\admin\\news.html',
      1 => 1524018757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6e67bd2bbf4_78662709 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h5>新闻管理</h5>
                    <span class="input-group-btn aa">
                        <a href="index.php?f=news&a=addnews" target="iframe0">
                            <button type="button" class="btn btn-sm btn-primary">增加</button>
                        </a>
                    </span>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>标题</th>
                                <th>描述</th>
                                <th>类型</th>
                                <th>浏览量</th>
                                <th>时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'itme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itme']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['itme']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['itme']->value['title'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['itme']->value['des'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['itme']->value['type'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['itme']->value['look'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['itme']->value['time'];?>
</td>
                                <td>
                                    <span class="input-group-btn">
                                    <a href="index.php?f=news&a=delnews&id=<?php echo $_smarty_tpl->tpl_vars['itme']->value['id'];?>
" target="iframe0">
                                        <button type="button" class="btn btn-sm btn-primary">删除</button>
                                        </a>
                                 </span>
                                    <span class="input-group-btn">
                                        <a href="index.php?f=news&a=updnews&id=<?php echo $_smarty_tpl->tpl_vars['itme']->value['id'];?>
" target="iframe0">
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
