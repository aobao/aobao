<?php
/* Smarty version 3.1.30, created on 2018-04-18 08:32:39
  from "D:\wamp\www\aobaoweb\templates\admin\mess.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6e687e3fe12_51289082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95f57aaf7fb0ebe0d19d30065f8fb9e800e01805' => 
    array (
      0 => 'D:\\wamp\\www\\aobaoweb\\templates\\admin\\mess.html',
      1 => 1523236039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6e687e3fe12_51289082 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录提示</title>
</head>
<style>
    *{
        margin: 0 auto;

    }
    body,html{
        background-image: url("./assets/img/1.jpg");
    }
    .box{
        width: 600px;
        height: 400px;
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        text-align: center;
        background: #cbcbcb75;
        border-radius: 15px;
    }
    .tb{
        border-radius: 15px 15px 0 0 ;
        width: 100%;
        height: 60px;
        line-height: 60px;
        text-align: center;
        background: #cdcfd1;
    }
    .tb h3{
        font-size: 24px;
        color: #0f0f0f;
        line-height: 60px;
        text-align: center;
    }
    h1{
        font-size: 40px;
        color: #333;
        text-align: center;
        margin-top: 30px;
    }
    span{
        font-size: 24px;
        color: #b3bdc7;
        text-align: center;
    }
    h4{
        text-align: center;
        font-size: 24px;
        margin-top: 20px;
        margin-bottom: 20px;
        color: #b3bdc7;
    }
    a{
        font-size: 22px;
        text-align: center;
        margin-top: 5px;
        color: #bdc6c7;
    }
</style>
<body>
<div class="box">
    <div class="tb">
        <h3>登录提示</h3>
    </div>
    <h1><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</h1>
    <h4><span>5</span>秒后自动跳转</h4>
    <a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
">立即跳转</a>
</div>
</body>
<?php echo '<script'; ?>
>
    let time=5;
    let span=document.querySelector("span")
    let a=document.querySelector("a")
    let href=a.href;
    let index=href.lastIndexOf("/")+1;
    let str=href.slice(index)
//    console.log(href);
//    console.log(index);
//    console.log(str);
    a.onclick=function (e) {
        e.preventDefault();
        if(str=='index.php'){
            top.location.href=href;
        }else{
            location.href=href;
        }
    }
    setInterval(function () {
        time--
        span.innerHTML=time;
        if(time==0){
            if(str=='index.php'){
                top.location.href=href;
            }else{
                location.href=href;
            }
        }
    },1000);



<?php echo '</script'; ?>
>
</html><?php }
}
