<?php
/* Smarty version 3.1.30, created on 2018-04-18 11:10:20
  from "D:\download\wamp\www\aobaoweb\templates\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad70b7c874906_91640697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6e886fc9cbe64f99bee2645193615e2e3beb565' => 
    array (
      0 => 'D:\\download\\wamp\\www\\aobaoweb\\templates\\admin\\login.html',
      1 => 1522742208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad70b7c874906_91640697 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo IMG_PATH;?>
favicon.png">

    <title>后台登录</title>

    <!-- Bootstrap CSS -->
    <link href="<?php echo CSS_PATH;?>
bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo CSS_PATH;?>
bootstrap-theme.css" rel="stylesheet">
    <!-- font icon -->
    <link href="<?php echo CSS_PATH;?>
elegant-icons-style.css" rel="stylesheet"/>
    <link href="<?php echo CSS_PATH;?>
font-awesome.css" rel="stylesheet"/>
    <!-- Custom styles -->
    <link href="<?php echo CSS_PATH;?>
style.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>
style-responsive.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <style>
        #user-error{
            width: 100%;
            height: 25px;
            background: #ffffff;
            margin-bottom: 0;
        }
        #pass-error{
            width: 100%;
            height: 25px;
            background: #ffffff;
            margin-bottom: 0;
        }
        #code-error{
            width: 100%;
            height: 25px;
            background: #ffffff;
            margin-bottom: 0;
        }
        .yzimg{
            position: absolute;
            top: 0;
            right: 0;
            margin: auto;
            background: red;
            z-index: 999;
            width: 120px;
            height: 42px;
        }
        .yzimg img{
            width: 100%;
        }
    </style>
</head>
<body class="login-img3-body">
<div class="container">
    <form class="login-form" action="index.php?a=checkpass" id="page1" method="post">
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon  " for="user" ><i class="icon_profile"></i></span>
                <input type="text" class="form-control" placeholder="Username" name="user" id="user" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"  for="pass"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="pass" id="pass">
            </div>
            <div class="input-group">
                <span class="input-group-addon"  for="code"><i class="icon_key_alt"></i></span>
                <input type="text" class="form-control" placeholder="验证码" name="code" id="code">
                <div class="yzimg">
                    <img src="index.php?m=admin&a=code" alt="" onclick="this.src='index.php?m=admin&a=code&'+Math.random()">
                </div>
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> 记住密码
                <span class="pull-right"> <a href="#"> 忘记密码?</a></span>
            </label>

            <button class="btn btn-primary btn-lg btn-block" type="submit">登录</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">注册</button>
        </div>
    </form>
</div>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
messages_zh.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $('#page1').validate({
        rules:{
            user:{
                required:true,
//                number:true,
                rangelength:[4,16],
            },
            pass:{
                required:true,
//                number:true,
                rangelength:[4,16],
            },
            code:{
                required:true,
                rangelength:[4,6],
            }
        },
        messages:{
            user:{
                required:"账号不能为空",
//                number:"必须输入正确的整数",
                rangelength:"账号输入长度必须介于<?php echo 0;?>
 和<?php echo 1;?>
 之间",
            },
            pass:{
                required:"密码不能为空",
//                number:"必须输入正确的整数",
                rangelength:"密码输入长度必须介于<?php echo 0;?>
 和<?php echo 1;?>
 之间",
            },
            code:{
                required:"验证码不能为空",
                rangelength:"验证码输入长度必须介于<?php echo 0;?>
 和<?php echo 1;?>
 之间",
            }
        },

    })

<?php echo '</script'; ?>
>
</html>
<?php }
}
