<?php
/* Smarty version 3.1.30, created on 2018-04-18 08:44:11
  from "D:\wamp\www\aobaoweb\templates\admin\updatecomment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6e93b5935d7_61700409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f585908e32391795a3e49f0cc17f008867ebde2a' => 
    array (
      0 => 'D:\\wamp\\www\\aobaoweb\\templates\\admin\\updatecomment.html',
      1 => 1524022054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6e93b5935d7_61700409 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>主页</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="<?php echo CSS_PATH;?>
bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>
font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <!-- Morris -->
    <link href="<?php echo CSS_PATH;?>
plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <!-- Gritter -->
    <link href="<?php echo JS_PATH;?>
plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>
animate.min.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>
style.min.css?v=4.0.0" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo KIND_PATH;?>
themes/default/default.css" />
    <link rel="stylesheet" href="<?php echo KIND_PATH;?>
plugins/code/prettify.css" />
    <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo KIND_PATH;?>
kindeditor-all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo KIND_PATH;?>
lang/zh-CN.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo KIND_PATH;?>
plugins/code/prettify.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        KindEditor.ready(function(K) {
            var editor1 = K.create('textarea[name="con"]', {
                cssPath : '<?php echo KIND_PATH;?>
plugins/code/prettify.css',
                uploadJson : '<?php echo KIND_PATH;?>
php/upload_json.php',
                fileManagerJson : '<?php echo KIND_PATH;?>
php/file_manager_json.php',
                allowFileManager : true,
                afterCreate : function() {
                    var self = this;
                    K.ctrl(document, 13, function() {
                        self.sync();
                        K('form[name=example]')[0].submit();
                    });
                    K.ctrl(self.edit.doc, 13, function() {
                        self.sync();
                        K('form[name=example]')[0].submit();
                    });
                }
            });
            prettyPrint();
        });
    <?php echo '</script'; ?>
>

    <base target="_blank">
    <style>
        .aa{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            padding:  0 0 0 15px;
        }
        .aa img{
            width: 100%;
        }
    </style>
</head>

<body class="gray-bg">

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>修改预约试驾</h5>
                </div>
                <div class="ibox-content">
                    <form  class="form-horizontal" action="index.php?f=comment&a=updatecomchack"  target="iframe0"  method="post" enctype="multipart/form-data">

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">ID</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="请输入内容ID" class="form-control"  name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" readonly>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">车系</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="请输入标题" class="form-control" name="xilie" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['xilie'];?>
">
                                <span class="help-block m-b-none">请输入车系</span>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">车型</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="请输入推荐ID" class="form-control"  name="type" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['type'];?>
">
                                <span class="help-block m-b-none">请输入车型</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">姓名</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="请输入标题" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">性别</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="请输入标题" class="form-control" name="sex" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['sex'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">联系电话</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="请输入标题" class="form-control" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['phone'];?>
">
                                <span class="help-block m-b-none">请输入联系电话</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">经销商省</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="请输入标题" class="form-control" name="province" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['province'];?>
">
                                <span class="help-block m-b-none">请输入经销商省</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">经销商省</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="请输入标题" class="form-control" name="jingxiao" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['jingxiao'];?>
">
                                <span class="help-block m-b-none">请输入经销商</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">联系电话</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="请输入标题" class="form-control" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['phone'];?>
">
                                <span class="help-block m-b-none">请输入联系电话</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">预约时间</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="请输入标题" class="form-control" name="date" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['date'];?>
">
                                <span class="help-block m-b-none">请输入预约时间</span>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">留言</label>
                            <div class="col-sm-10">
                                <textarea id="ccomment" name="con" class="form-control" required="" aria-required="true" style="width:700px;height:200px;">
                                    <?php echo $_smarty_tpl->tpl_vars['arr']->value['message'];?>

                                </textarea>
                                <span class="help-block m-b-none">请输入留言</span>
                            </div>
                        </div>



                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">确认修改</button>
                                <button class="btn btn-white" type="submit">取消</button>
                            </div>
                        </div>

                    </form>
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
plugins/flot/jquery.flot.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/flot/jquery.flot.tooltip.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/flot/jquery.flot.spline.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/flot/jquery.flot.resize.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/flot/jquery.flot.pie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/peity/jquery.peity.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
demo/peity-demo.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
content.min.js?v=1.0.0"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/gritter/jquery.gritter.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/easypiechart/jquery.easypiechart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
demo/sparkline-demo.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"><?php echo '</script'; ?>
>
</html><?php }
}
