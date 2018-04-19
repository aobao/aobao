<?php
/* Smarty version 3.1.30, created on 2018-04-18 11:11:06
  from "D:\download\wamp\www\aobaoweb\templates\admin\carinfo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad70baaebd606_99436101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f562cc625d97061faa76bcfe57b57471f430948e' => 
    array (
      0 => 'D:\\download\\wamp\\www\\aobaoweb\\templates\\admin\\carinfo.html',
      1 => 1524033286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad70baaebd606_99436101 (Smarty_Internal_Template $_smarty_tpl) {
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
    .aa{
        position: absolute;
        margin-left: 80px;
        margin-top: -12px;
    }
    .ibox-title{
        height: 60px;
        line-height: 60px;
    }
    .ibox-title h5{
        line-height: 30px;
    }
</style>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>栏目分类</h5>
                    <span class="input-group-btn aa">
                        <a href="index.php?f=update&a=addcar" target="iframe0">
                            <button type="button" class="btn btn-sm btn-primary">增加</button>
                        </a>
                    </span>
                </div>
                <div class="ibox-content">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>车类型</th>
                            <th>英文名</th>
                            <th>车名</th>
                            <th>介绍</th>
                            <th>英文介绍</th>
                            <th>img</th>
                            <th>价格</th>
                            <th>cid</th>
                            <th>描述</th>
                            <th>操作</th>
                        </tr>

                        </thead>
                        <tbody>
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <tr>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ename'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['introduce'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['eintro'];?>
</td>
                          <td>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="" width="50">

                           </td>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cid'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['item']->value['des'];?>
</td>
                          <td><span> <a href="index.php?m=admin&f=update&a=modifycar&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" target="iframe0"><button type="button" class='btn btn-sm btn-primary' name="button">修改</button> </a> </span>
                          <span> <a href="index.php?m=admin&f=update&a=delcar&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" target="iframe0"><button type="button" class='btn btn-sm btn-primary' name="button">删除</button> </a> </span></td>
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
</html>
<?php }
}
