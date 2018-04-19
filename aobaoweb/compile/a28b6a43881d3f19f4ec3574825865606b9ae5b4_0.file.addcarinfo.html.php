<?php
/* Smarty version 3.1.30, created on 2018-04-18 17:14:14
  from "D:\download\wamp\www\aobaoweb\templates\admin\addcarinfo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad760c6569775_13168435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a28b6a43881d3f19f4ec3574825865606b9ae5b4' => 
    array (
      0 => 'D:\\download\\wamp\\www\\aobaoweb\\templates\\admin\\addcarinfo.html',
      1 => 1524033024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad760c6569775_13168435 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加栏目</title>
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
style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">

</head>
<style>
    .upload{
        width: auto;
        height: auto;
        overflow: hidden;
    }
    .upload input{
        width: 100px;
        height: 100px;
        position: relative;
        font-size: 0;
        outline: none;
        margin-left: 14px;
        margin-top: 14px;
        float: left;
    }
    .upload input:after{
        content: '+';
        display: block;
        width: 100%;
        height: 100%;
        background: #FFFFFF;
        font-size: 90px;
        color: #cccccc;
        border: 1px dashed #cccccc;
        box-sizing: border-box;
        position: absolute;
        left: 0;
        top: 0;
        text-align: center;
        line-height: 100px;
    }
    .imgbox{
        width: auto;
        height: auto;
        overflow: hidden;
        margin: 14px 0 0 14px;
        float: left;
    }
</style>
<body class="gray-bg">

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>添加车信息</h5>
                </div>
                <div class="ibox-content">
                    <form method="post" class="form-horizontal" action="index.php?f=update&a=addcarcheck"  target="iframe0">


                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">车名</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="请输入名称" class="form-control"  name="name">
                                <span class="help-block m-b-none">请输入车名</span>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">添加车英文名</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="添加车英文名" class="form-control"  name="ename">
                                <span class="help-block m-b-none">添加车英文名</span>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">添加车类型</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="添加车英类型" class="form-control"  name="type">
                                <span class="help-block m-b-none">添加车类型</span>
                            </div>
                        </div><div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">添加车价格</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="添加车价格" class="form-control"  name="price">
                                <span class="help-block m-b-none">添加车价格</span>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">添加车描述</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="添加车英描述" class="form-control"  name="des">
                                <span class="help-block m-b-none">添加车描述</span>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">添加车介绍</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="添加车介绍" class="form-control"  name="introduce">
                                <span class="help-block m-b-none">添加车介绍</span>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">添加车英文介绍</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="添加车英文介绍" class="form-control"  name="eintro">
                                <span class="help-block m-b-none">添加车英文介绍</span>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">添加车图片</label>
                            <div class="col-sm-10">
                                <div class="upload">
                                    <input type="file" name="img" multiple>
                                    <ul class="imgbox"></ul>
                                </div>
                                <span class="help-block m-b-none">请添加车图片</span>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">确认添加</button>
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
content.min.js?v=1.0.0"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    let input = document.querySelector('.upload input[type=file]');
    let imgbox = input.nextElementSibling;
    let size = 1024*1024*2;
    let type = ['image/png','image/gif','image/jpeg'];
    input.onchange = function () {
        imgbox.innerHTML = '';
        let arr = this.files;
        for (let i=0;i<arr.length;i++){
            if (arr[i].size>size){
                alert("图片过大");
                return;
            }
            if (!type.includes( arr[i].type)){
                alert("请上传图片类型");
                return;
            }
        }
        for (let i=0;i<arr.length;i++){
            let fileread = new FileReader();
            fileread.readAsDataURL(arr[i]);
            fileread.onload = function () {
                let li = document.createElement('li');
                li.style.cssText = "width:140px;height:100px;float:left;background-image:url("+this.result+");background-size:cover;position:relative;margin-right:14px;";
                imgbox.appendChild(li);

                let div = document.createElement('div');
                div.style.cssText = "width:100%;height:2px;position:absolute;left:0;bottom:0;background:blue;border-radius:1px;";
                li.appendChild(div);

                let formdata = new FormData();
                formdata.append("file",arr[i]);
                let ajax = new XMLHttpRequest();
                ajax.upload.onprogress = function (e) {
                    let wi = e.loaded/e.total*100;
                    div.style.width = wi+"%";
                };
                ajax.onload = function (e) { //ajax发送完成事件
                    let inp= document.createElement('input');
                    inp.type='hidden';
                    inp.name='img[]';
                    inp.value=ajax.responseText;
                    input.parentNode.appendChild(inp);
                    console.log(ajax.responseText);
                };
                ajax.open('post','index.php?f=update&a=imgsc');
                ajax.send(formdata);
            };

        }
    }
<?php echo '</script'; ?>
>
</html>
<?php }
}
