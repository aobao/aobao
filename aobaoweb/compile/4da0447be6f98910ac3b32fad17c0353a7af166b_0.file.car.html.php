<?php
/* Smarty version 3.1.30, created on 2018-04-19 10:42:40
  from "D:\download\wamp\www\aobaoweb\templates\index\car.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad85680d0c413_10509307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4da0447be6f98910ac3b32fad17c0353a7af166b' => 
    array (
      0 => 'D:\\download\\wamp\\www\\aobaoweb\\templates\\index\\car.html',
      1 => 1524106382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5ad85680d0c413_10509307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--头部结束-->

<!--面包屑开始-->
<section class="tab_header">
    <div class="tab_bread">
        <div class="tab_bread_mian">
            <div class="tab_bread_index">
                <div class="tab_bread_line"></div>
                <div class="tab_bread_font">
                    <h5 class="tab_bread_chinese">首页</h5>
                    <h5 class="tab_bread_English">Home</h5>
                </div>
            </div>
            <div class="tab_bread_icon_box">
                <i class="tab_bread_icon">&#xe66f;</i>
            </div>
            <div class="tab_bread_index">
                <div class="tab_bread_line"></div>
                <div class="tab_bread_font">
                    <h5 class="tab_bread_chinese">品牌车型</h5>
                    <h5 class="tab_bread_English">CARTYPE</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="tab_line1"></div>
    <div class="tab_line2"></div>
    <div class="tab_img">
        <img src="<?php echo IMG_PATH;?>
tab_1.png" alt="">
    </div>
</section>
<!--面包屑结束-->

<!--新品开始-->
<section id="car-newa">
    <div class="car-newa-timg">
        <img src="<?php echo IMG_PATH;?>
car-xptj.png" alt="">
    </div>

    <div class="car-newa-one">
        <div class="car-newa-one-z">
            <img src="<?php echo IMG_PATH;?>
car-one-01.png" alt="">
        </div>

        <div class="car-newa-one-dian">
            <i class="iconfont">&#xe607;</i>
        </div>

        <div class="car-newa-one-y">
            <div class="car-newa-z-img">
                <img src="<?php echo IMG_PATH;?>
car-one-02.png" alt="">
            </div>
            <span class="car-newa-z-span">
                <h3 class="car-newa-z-span-h3">奥宝汽车腾飞系列</h3>
                <div class="car-newa-xc">
                    <img src="<?php echo IMG_PATH;?>
car-dian-gao.png" alt="">
                </div>
                <h6 class="car-newa-z-span-h6">
                    其高技术水平，高质量标准以及高强劲动力的准则
                </h6>
                <h6 class="car-newa-z-span-h6">
                    让奥迪品牌成为国际著名豪华汽车的标准
                </h6>
            </span>
        </div>
    </div>

    <div class="car-newa-two">
        <div class="car-newa-two-z">
            <span class="car-newa-z-span">
                <h3 class="car-newa-z-span-h3">奥宝汽车腾飞系列</h3>
                <div class="car-newa-xc">
                    <img src="<?php echo IMG_PATH;?>
car-dian-gao.png" alt="">
                </div>
                <h6 class="car-newa-z-span-h6">
                    其高技术水平，高质量标准以及高强劲动力的准则
                </h6>
                <h6 class="car-newa-z-span-h6">
                    让奥迪品牌成为国际著名豪华汽车的标准
                </h6>
            </span>
            <div class="car-newa-z-img">
                <img src="<?php echo IMG_PATH;?>
car-two-01.png" alt="">
            </div>
        </div>
        <div class="car-newa-two-dian">
            <i class="iconfont">&#xe607;</i>
        </div>
        <div class="car-newa-two-y">
            <img src="<?php echo IMG_PATH;?>
car-two-02.png" alt="">
        </div>
    </div>

</section>
<!--新品结束-->

<!--品牌车型开始-->
<section id="car-mode">
    <div class="mode-t-img">
        <img src="<?php echo IMG_PATH;?>
car-mode-t.png" alt="">
    </div>
    <div class="frame">
        <ul class="car-frame-one">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'itme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itme']->value) {
?>
            <li class="car-frame-li">
                <div class="car-frame-li-img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['itme']->value['img'];?>
" alt="">
                </div>
                <span>
                    <h3><?php echo $_smarty_tpl->tpl_vars['itme']->value['type'];?>
</h3>
                    <div class="car-frame-tt">
                        <img src="<?php echo IMG_PATH;?>
car-dian-gao.png" alt="">
                    </div>
                    <h6 class="ic"><?php echo $_smarty_tpl->tpl_vars['itme']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['itme']->value['ename'];?>
</h6>
                    <h6 class="id">起步价 <?php echo $_smarty_tpl->tpl_vars['itme']->value['price'];?>
 RMB</h6>
                </span>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
   <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

    <div class="ofo">
        <img src="<?php echo IMG_PATH;?>
car_40.png" alt="">
        <a href="#">
            <div class="car_ann">
                <h3>MORE</h3>
            </div>
        </a>
    </div>
</section>
<!--品牌车型结束-->

<!--联系我们开始-->
<div class="car_caon">
    <img src="<?php echo IMG_PATH;?>
car-caon-t.png" alt="">
</div>
<!--联系我们结束-->

<!--底部开始-->
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
