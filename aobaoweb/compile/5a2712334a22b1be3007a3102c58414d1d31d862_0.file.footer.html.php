<?php
/* Smarty version 3.1.30, created on 2018-04-18 15:31:28
  from "D:\download\wamp\www\aobaoweb\templates\index\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad748b0239401_79307903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a2712334a22b1be3007a3102c58414d1d31d862' => 
    array (
      0 => 'D:\\download\\wamp\\www\\aobaoweb\\templates\\index\\footer.html',
      1 => 1524058264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad748b0239401_79307903 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer>
    <div class="index-footer">
        <ul class="index-center">
            <li class="index-our">
                <img src="<?php echo IMG_PATH;?>
car_03.png" alt="">
                <a href="" class="index-bt">EMALE</a><br>
                <span class="index-xq">549765661@QQ.COM 12306.CN<br>Aobao945234@163.com</span>
            </li>
            <li class="index-our">
                <img src="<?php echo IMG_PATH;?>
car_06.png" alt="">
                <a href="" class="index-bt">ADD</a><br>
                <span class="index-xq">山西省太原市小店区康宁街海棠家园<br>上海市静安区威海路1008号</span>
            </li>
            <li class="index-our">
                <img src="<?php echo IMG_PATH;?>
car_09.png" alt="">
                <a href="" class="index-bt">TEL</a><br>
                <span class="index-xq">0353-5499564&nbsp;0354-4569745<br>15364542604</span>
            </li>
        </ul>
        <div class="index-bottom">
            <img src="<?php echo IMG_PATH;?>
footer.png" alt="">
            <span class="index-di">网络文化经营许可证 京网文[2016]6173-844号 <br>京公网安备11010502000501号 </span>
            <div class="index-car">
                <img src="<?php echo IMG_PATH;?>
car012.png" alt="">
            </div>
        </div>
    </div>
</footer>
<!--底部结束-->


</body>
<?php echo '<script'; ?>
>
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
<?php echo '</script'; ?>
>
</html>
<?php }
}
