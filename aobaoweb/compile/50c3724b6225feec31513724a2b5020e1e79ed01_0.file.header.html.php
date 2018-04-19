<?php
/* Smarty version 3.1.30, created on 2018-04-19 10:48:00
  from "D:\download\wamp\www\aobaoweb\templates\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad857c069e915_67588388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50c3724b6225feec31513724a2b5020e1e79ed01' => 
    array (
      0 => 'D:\\download\\wamp\\www\\aobaoweb\\templates\\index\\header.html',
      1 => 1524127677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad857c069e915_67588388 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>首页</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
base.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_630093_f9cqc5vluwu92j4i.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
car.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
cetdet.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
center.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
tab.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
server.css">
    <?php echo '<script'; ?>
 src='<?php echo JS_PATH;?>
jquery.min.js'><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
contact.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
header.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.min.js"><?php echo '</script'; ?>
>
</head>
<style>
    html, body {
        position: relative;
        height: 100%;

    }

    body {
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
    }

    .swiper-container {
        width: 100%;
        height: 100%;

    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;

    }

    .index-banner {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .index-more {
        position: absolute;
        top: 59%;
        left: 230px;
    }

    .index-nav {
        position: absolute;
        top: 27px;
        left: 0;
        z-index: 50;
    }

    .index-logo {
        width: 84px;
        height: 95px;
        position: absolute;
        top: 0;
        left: 212px;
    }

    .index-dh {
        position: absolute;
        top: 10px;
        left: 30%;
        color: #ffffff;
        font-size: 16px;
    }

    .index-dh li {
        float: left;
        margin-left: 50px;
        list-style: none;
    }

    .index-dh li:hover a {
        color: #ffd71b;
    }

    .index-dh li a {
        display: block;
        color: #ffffff;
        text-decoration: none;
    }

    .index-xz {
        font-size: 9px;
        color: #ffffff;
        margin-top: -3px;
    }

    .index-dz {
        margin-bottom: -3px;
    }

    .index-footer {
        width: 100%;
        height: auto;
    }

    .index-top {
        width: 126px;
        height: 54px;
        margin: 0 auto;
    }

    .index-center {
        width: 976px;
        height: 204px;
        margin: 0 auto;
    }

    .index-our {
        width: 323px;
        height: 68px;
        float: left;
        font-size: 13px;
        text-align: center;;
        line-height: 20px;
        margin: 68px auto;
    }

    .index-our:first-child {
        margin-left: 0;
        border-right: 3px solid #d2d2d2;
    }

    .index-our:nth-child(2) {
        border-right: 3px solid #d2d2d2;
    }

    .index-bt {
        color: #f15823;
        text-decoration: none;
    }

    .index-bottom {
        width: 100%;
        height: 133px;
        position: relative;
    }

    .index-bottom img {
        width: 100%;
        height: 100%;
    }

    .index-di {
        position: absolute;
        top: 20%;;
        left: 40%;
        color: #ccc;
        text-align: center;
        line-height: 40px;
        font-size: 12px;
    }

    .index-car {
        width: 412px;
        height: 251px;
        position: absolute;
        bottom: 0;
        right: 0;
    }
</style>
<body>
<!--头部开始-->
<header class="tab_banner">
    <div class="index-nav">
        <img src="<?php echo IMG_PATH;?>
dh.png" alt="">
        <div class="index-logo"><img src="<?php echo IMG_PATH;?>
logo.png" alt=""></div>
        <ul class="index-dh">
            <li><a href="index.php?m=index&f=index&a=init" class="index-dz">首页</a>
                <img src="<?php echo IMG_PATH;?>
heng.png" alt="">
                <a href="index.php?m=index&f=index&a=init" class="index-xz">SHOUYE</a>
            </li>
            <li><a href="index.php?m=index&f=index&a=type">品牌车型</a>
                <img src="<?php echo IMG_PATH;?>
heng.png" alt="">
                <a href="index.php?m=index&f=index&a=type" class="index-xz">CHEXIN</a>
            </li>
            <li><a href="index.php?m=index&f=index&a=center">品牌中心</a>
                <img src="<?php echo IMG_PATH;?>
heng.png" alt="">
                <a href="index.php?m=index&f=index&a=center" class="index-xz">ZHONGXIN</a>
            </li>
            <li><a href="index.php?m=index&f=index&a=server">车主服务</a>
                <img src="<?php echo IMG_PATH;?>
heng.png" alt="">
                <a href="index.php?m=index&f=index&a=server" class="index-xz">FUWU</a>
            </li>
            <li><a href="index.php?m=index&f=index&a=cardet">企业文化</a>
                <img src="<?php echo IMG_PATH;?>
heng.png" alt="">
                <a href="index.php?m=index&f=index&a=cardet" class="index-xz">FUWU</a>
            </li>
            <li><a href="index.php?m=index&f=index&a=concat">联系我们</a>
                <img src="<?php echo IMG_PATH;?>
heng.png" alt="">
                <a href="index.php?m=index&f=index&a=concat" class="index-xz">LIANXI</a>
            </li>
        </ul>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
banner1.png" alt="" class="index-banner">
                <a href=""><img src="<?php echo IMG_PATH;?>
more.png" alt="" class="index-more"></a>
            </div>
            <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
banner2.png" alt="" class="index-banner">
                <a href=""><img src="<?php echo IMG_PATH;?>
more.png" alt="" class="index-more"></a>
            </div>
            <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
banner3.png" alt="" class="index-banner">
                <a href=""><img src="<?php echo IMG_PATH;?>
more.png" alt="" class="index-more"></a>
            </div>
            <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
banner4.png" alt="" class="index-banner">
                <a href=""><img src="<?php echo IMG_PATH;?>
more.png" alt="" class="index-more"></a>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</header>
<?php }
}
