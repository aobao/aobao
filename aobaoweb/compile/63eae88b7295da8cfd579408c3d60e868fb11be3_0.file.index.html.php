<?php
/* Smarty version 3.1.30, created on 2018-04-18 17:13:54
  from "D:\download\wamp\www\aobaoweb\templates\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad760b2683584_24688630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63eae88b7295da8cfd579408c3d60e868fb11be3' => 
    array (
      0 => 'D:\\download\\wamp\\www\\aobaoweb\\templates\\index\\index.html',
      1 => 1524064433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5ad760b2683584_24688630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--头部结束-->


<!-- article 是最大盒子  不包括 头尾 -->
<article class="index-article">
    <!-- 活动享开始 -->
    <div class="index-active">
        <div class="index-title">
            <img src="<?php echo IMG_PATH;?>
hd.png" alt="不是没有只是没放">
        </div>
        <div class="index-tabs">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <div class="index-tab ">
                <h2><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h2>
                <h2><?php echo $_smarty_tpl->tpl_vars['item']->value['ename'];?>
</h2>
            </div>
            <!-- <div class="index-tab">
                <h2>宝来系轿车</h2>
                <h2>TENGXICAR</h2>
            </div>
            <div class="index-tab">
                <h2> 脉系运动轿车</h2>
                <h2>TENGXICAR</h2>
            </div> -->
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <div class="index-content ">
            <div class="left">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="没放而已">
            </div>
            <div class="right">
                <h1>AOBAO</h1>
                <h1>TENXICAR</h1>
                <h2>凡购买次产品，一律九折优惠 原件如你所见</h2>
                <p>2018年1月1日开始，截止至2018年3月3日为止首次购者，</p>
                <p>买即首付20%起或低利率凡澳宝车购享受万里免费</p>
                <p>保养服务或者专属服务</p>
                <p>we our to give your the mostserver
                    if you wangto make we the mustbe jusu to you
                    i think is very good
                </p>
                <div class="more">
                    <a href="#"> <img src="<?php echo IMG_PATH;?>
more1_03.png" alt="不想放"></a>
                </div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
    $('.index-tabs .index-tab').eq(0).addClass('active');
    $('.index-active .index-content').eq(0).addClass('active');
        $('.index-active .index-tabs .index-tab').click(function () {
            var index = $(this).index();
            $('.index-tabs .index-tab').removeClass('active');
            $('.index-tabs .index-tab').eq(index).addClass('active');
            $('.index-active .index-content').removeClass('active');
            $('.index-active .index-content').eq(index).addClass('active');
        })
    <?php echo '</script'; ?>
>
    <!-- 活动结束 -->
    <!-- 车型推荐  开始 -->
    <div class="index-cartype">
        <div class="index-title">
            <img src="<?php echo IMG_PATH;?>
cartype.png" alt="不是没有只是没放">
        </div>
        <div class="index-content">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <div class="index-imgbox">
                <div class="imgbox">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="bixua">
                </div>
                <div class="index-bottom">
                    <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
</h1>
                    <p><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p>
                    <p>起步价<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</p>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </div>
    </div>
    <!-- 车型推荐  结束 -->

    <!-- 关于我们开始 -->
    <div class="index-about">
        <div class="index-title">
            <img src="<?php echo IMG_PATH;?>
index-about.png" alt="不是没有只是没放">
        </div>
        <div class="index-content">
            <div class="left">
                <div class="img-box">
                    <img src="<?php echo IMG_PATH;?>
top_03.png" alt="wu">
                </div>
                <h1>THE SEA WITHLOVE</h1>
                <p>------------------------------------------------</p>
                <pre> 澳宝是中国历史悠久的 汽车建造商其技术
  高过了许多外国一般的公司的技术
  高标准的技术和质量保证了其品牌效应
  高过了许多外国一般的公司的技术
  高标准的技术和质量保证了其品牌效应</pre>
                <div class="more">
                    <a href="#"> <img src="<?php echo IMG_PATH;?>
more1_03.png" alt="不想放"></a>

                </div>
            </div>

            <div class="right">
                <div class="imgbox">
                    <img src="<?php echo IMG_PATH;?>
tj_11.png" alt="we">
                </div>
                <div class="imgfloat">
                    <img src="<?php echo IMG_PATH;?>
top_07.png" alt="be">
                </div>
            </div>
        </div>
    </div>
    <!-- 关于我们结束 -->


    <!-- 我的地图 开始 -->
    <div class="index-mymap">
        <div class="index-title">
            <img src="<?php echo IMG_PATH;?>
mymap.png" alt="不是没有只是没放">
        </div>
        <div class="index-content">
            <div class="tabs">
                <div class="tab">
                    <h1>山西</h1>
                    <h1>SHANXI</h1>
                    <div class="index-more">
                        <a href="javascript:void(0);"> <img src="<?php echo IMG_PATH;?>
more1_03.png" alt="ad"></a>
                    </div>
                </div>
                <div class="tab">
                    <h1>山东</h1>
                    <h1>SHANDONG</h1>
                    <div class="index-more">
                        <a href="javascript:void(0);"> <img src="<?php echo IMG_PATH;?>
more1_03.png" alt="ad"></a>
                    </div>
                </div>
                <div class="tab">
                    <h1>河南</h1>
                    <h1>HENAN</h1>
                    <div class="index-more">
                        <a href="javascript:void(0);"> <img src="<?php echo IMG_PATH;?>
more1_03.png" alt="ad"></a>
                    </div>
                </div>
                <div class="tab">
                    <h1>河北</h1>
                    <h1>HEBEI</h1>
                    <div class="index-more">
                        <a href="javascript:void(0);"> <img src="<?php echo IMG_PATH;?>
more1_03.png" alt="ad"></a>
                    </div>
                </div>
                <div class="tab">
                    <h1>北京</h1>
                    <h1>BEIJIN</h1>
                    <div class="index-more">
                        <a href="javascript:void(0);"> <img src="<?php echo IMG_PATH;?>
more1_03.png" alt="ad"></a>
                    </div>
                </div>
                <div class="tab">
                    <h1>苏州</h1>
                    <h1>SUZHOU</h1>
                    <div class="index-more">
                        <a href="javascript:void(0);"> <img src="<?php echo IMG_PATH;?>
more1_03.png" alt="ad"></a>
                    </div>
                </div>
            </div>
            <div class="index-p">
                <h1>FIND A SHOW</h1>
                <h1>ROOM NEAR YOU</h1>
            </div>
            <div class="index-search">
                <span> <h1>SEARCH YOU WANT TO BUY</h1> </span>

            </div>
            <div class="index-input">
                <input type="text" name="" value="" placeholder="搜索车型">
                <img src="<?php echo IMG_PATH;?>
search.png" alt="">
            </div>
        </div>

    </div>
    <div class="index-concat">
        <div class="index-title">
            <img src="<?php echo IMG_PATH;?>
concat.png" alt="不是没有只是没放">
        </div>
    </div>

    <!-- 我的地图 结束 -->
</article>

<!--底部开始-->
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
