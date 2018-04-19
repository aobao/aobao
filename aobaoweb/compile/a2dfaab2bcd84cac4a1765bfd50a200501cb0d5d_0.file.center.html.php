<?php
/* Smarty version 3.1.30, created on 2018-04-19 10:56:04
  from "D:\download\wamp\www\aobaoweb\templates\index\center.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad859a4af2154_43615904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2dfaab2bcd84cac4a1765bfd50a200501cb0d5d' => 
    array (
      0 => 'D:\\download\\wamp\\www\\aobaoweb\\templates\\index\\center.html',
      1 => 1524128162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5ad859a4af2154_43615904 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h5 class="tab_bread_chinese">品牌中心</h5>
                    <h5 class="tab_bread_English">CENTER</h5>
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


<article class="center">
    <div class="center-news">
        <div class="title">
            <img src="<?php echo IMG_PATH;?>
wz_03.png" alt="">
        </div>
        <div class="center-content">
            <div class="center-left">
                <p>【前沿科技】</p>
                <p><b>BREAK TECNOLIG TECNOLIG FUTURN</b></p>
                <p><b>突破科技 启迪未来</b></p>
                <p><b>2018</b>前沿科技占据主导地位 </p>
                <pre>再动力方面，奥迪动力与效率基于发动机
以及再高效节能方面，奥迪将超清凉科技化
AODI IS VERY HIGN IN THE MEA OF THE WAY

             </pre>
            </div>
            <div class="center-right">
                <img src="<?php echo IMG_PATH;?>
center_07.png" alt="">
            </div>
        </div>
    </div>
    <section>
        <div class="center-title">
            <img src="<?php echo IMG_PATH;?>
wz_07.png" alt="">
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <div class="center-content">
            <div class="center-left">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="">
            </div>
            <div class="center-right">
                <!-- <div class="time">
                    <i></i><span><?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>
</span>
                </div> -->
                <h1><b>BRAEK TEKNOLIG</b>TECNOLIG FUTURN </h1>
                <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 </h1>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</p>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <div class="center-pots">

            <ul>

                <?php echo $_smarty_tpl->tpl_vars['page']->value;?>


            </ul>

        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            $('.center-pots ul>li').click(function () {
                var index = $(this).index();
                console.log(index);
                $('.center-pots ul div.pot').removeClass('active');
                $('.center-pots ul div.pot').eq(index).addClass('active');
            })
        <?php echo '</script'; ?>
>


        <div class="center-maximg">
            <div class="center-banner">
                <img src="<?php echo IMG_PATH;?>
center_22.png" alt="">

            </div>
            <!--下图有背景色不能用  -->
            <!-- <div class="center-img">
              <img src="<?php echo IMG_PATH;?>
center-img.png" alt="">
            </div> -->
        </div>
        <div class="center-news-last">
            <div class="center-title">
                <img src="<?php echo IMG_PATH;?>
wz_10.png" alt="">
            </div>
            <div class="center-car">
                <div class="center-left">
                    <img src="<?php echo IMG_PATH;?>
center_28.png" alt="">
                </div>
                <div class="center-center">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['brr']->value[0]['img'];?>
" alt="">
                </div>
                <div class="center-right">
                    <h1><?php echo $_smarty_tpl->tpl_vars['brr']->value[0]['title'];?>
</h1>
                    <h2><?php echo $_smarty_tpl->tpl_vars['brr']->value[0]['des'];?>
"</h2>
                    <div class="look">
                        <span><?php echo $_smarty_tpl->tpl_vars['brr']->value[0]['look'];?>
</span>
                    </div>
                    <div class="date">
                        <span><?php echo $_smarty_tpl->tpl_vars['brr']->value[0]['time'];?>
</span>
                    </div>
                    <div class="center-arrow">
                        <img src="<?php echo IMG_PATH;?>
center_39.png" alt="">
                    </div>
                </div>
            </div>
            <div class="center-car">
                <div class="center-left">
                    <img src="<?php echo IMG_PATH;?>
center_36.png" alt="">
                </div>
                <div class="center-center">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['brr']->value[2]['img'];?>
" alt="">
                </div>
                <div class="center-right">
                    <h1><?php echo $_smarty_tpl->tpl_vars['brr']->value[2]['title'];?>
"</h1>
                    <h2><?php echo $_smarty_tpl->tpl_vars['brr']->value[2]['des'];?>
"</h2>
                    <div class="look">
                        <span><?php echo $_smarty_tpl->tpl_vars['brr']->value[2]['look'];?>
</span>
                    </div>
                    <div class="date">
                        <span><?php echo $_smarty_tpl->tpl_vars['brr']->value[2]['time'];?>
"</span>
                    </div>
                    <div class="center-arrow">
                        <img src="<?php echo IMG_PATH;?>
center_39.png" alt="">
                    </div>
                </div>
            </div>
            <div class="center-car">
                <div class="center-left">
                    <img src="<?php echo IMG_PATH;?>
center_48.png" alt="">
                </div>
                <div class="center-center">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['brr']->value[1]['img'];?>
" alt="">
                </div>
                <div class="center-right">
                    <h1><?php echo $_smarty_tpl->tpl_vars['brr']->value[1]['title'];?>
"</h1>
                    <h2><?php echo $_smarty_tpl->tpl_vars['brr']->value[1]['des'];?>
"</h2>
                    <div class="look">
                        <span><?php echo $_smarty_tpl->tpl_vars['brr']->value[1]['look'];?>
</span>
                    </div>
                    <div class="date">
                        <span><?php echo $_smarty_tpl->tpl_vars['brr']->value[1]['time'];?>
"</span>
                    </div>
                    <div class="center-arrow">
                        <img src="<?php echo IMG_PATH;?>
center_39.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="center-concat">
        <div class="title">
            <img src="<?php echo IMG_PATH;?>
center-concat.png" alt="">
        </div>
    </div>
</article>


<!--底部开始-->
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
