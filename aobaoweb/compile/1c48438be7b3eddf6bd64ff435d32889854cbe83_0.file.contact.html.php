<?php
/* Smarty version 3.1.30, created on 2018-04-19 04:38:12
  from "D:\download\wamp\www\aobaoweb\templates\index\contact.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad801142808d4_48424924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c48438be7b3eddf6bd64ff435d32889854cbe83' => 
    array (
      0 => 'D:\\download\\wamp\\www\\aobaoweb\\templates\\index\\contact.html',
      1 => 1524105490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5ad801142808d4_48424924 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h5 class="tab_bread_chinese">联系我们</h5>
                    <h5 class="tab_bread_English">CONTACT</h5>
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

<div class="contact-carbig">
    <div class="contact-text-head">
        <div class="contact-left">联系我们</div>
        <div class="contact-right">
            <div class="contact-right-top">PINPAI</div>
            <div class="contact-right-bot">JIESHAO</div>
        </div>
    </div>
    <div class="contact-heart-big">
        <div class="contact-heart-big-left">
            <div class="contact-lingting">用心聆听，及时回应</div>
            <div class="contact-break-big">
                <div class="contact-break-big-left">BREAKTHROUGH</div>
                <div class="contact-break-big-right">TECHNOLOGY &nbsp;FUTRUE</div>
            </div>
            <div class="contact-ruguo">如果您想进一步了解奥宝品牌及产品，或有其他任何疑问，请随时与我们去的联系</div>
            <div class="contact-tech">TECHNOLOGY TECHNOLOGY</div>
            <div class="contact-breakthrouth">BREAKTHROUTH TECHNOLOGY FUTURE,TECHNOLOGY</div>
        </div>
        <div class="contact-heart-big-right">
            <img src="<?php echo IMG_PATH;?>
our_03.png" alt="">
        </div>
    </div>

</div>
<div class="contact-addr">
    <img src="<?php echo IMG_PATH;?>
_06.png" alt="">
</div>
<div class="contact-address">
    <div class="contact-address-left">
        <img src="<?php echo IMG_PATH;?>
our_07.png" alt="">
    </div>
    <div class="contact-address-right">
        <div class="contact-quanquan-zuo">
            <div class="contact-quanquan1"></div>
            <div class="contact-quanquan2"></div>
        </div>
        <div class="contact-add-you">
            <div class="contact-haitang-big">
                <div class="contact-haitang-big-left">海棠市区门店地址</div>
                <div class="contact-haitang-big-right">HAITANGSHIQUMENDIAN</div>
            </div>
            <div class="contact-haitangline"></div>
            <div class="contact-shanxi">山西省太原市小店区高新区233号</div>
            <div class="contact-num">400-123-123</div>
            <div class="contact-haitang-big contact-xx">
                <div class="contact-haitang-big-left">海棠市区门店地址</div>
                <div class="contact-haitang-big-right">HAITANGSHIQUMENDIAN</div>
            </div>
            <div class="contact-haitangline"></div>
            <div class="contact-shanxi">山西省太原市小店区高新区233号</div>
            <div class="contact-num">400-123-123</div>
        </div>
    </div>
</div>
<div class="contact-biaodan">
    <div class="contact-biaodan-head">
        <div class="contact-liuyan-zi"><i>留言.</i></div>
        <div class="contact-com-big">
            <div class="contact-com">COM</div>
            <div class="contact-ments">MENTS</div>
        </div>
        <form action="">
            <input type="text" class="contact-first1" placeholder="NAME" name='name'>

            <input type="text" class="contact-second2" placeholder="PHONE" name='tel'
                   onkeypress="return event.keyCode>=48&&event.keyCode<=57">
            <!-- 48-57为数字0-9的keycode -->
            <!-- onkeypress键盘被按下并释放一个按键时发生 -->
            <input type="email" class="contact-second2" placeholder="EMAIL" name='email'>
            <div class="contact-xina"></div>
            <div class="contact-wenben"><input type="textarea" class="contact-textarea" name='message' placeholder="最多可输入200个字">
                <div class="contact-shizi">+</div>
            </div>
            <button type="submit" class="contact-btn">提交</button>
        </form>
        <?php echo '<script'; ?>
 type="text/javascript">
          $('button[type=submit]').click(function(e){
            e.preventDefault();
            $.ajax({
              url:'index.php?m=index&f=index&a=leavemessage',
              type:'post',
              data:$('form').serialize(),
              success:function(text){
                confirm(text);
              }
            })
          })
        <?php echo '</script'; ?>
>
    </div>
</div>
<div class="concat-newp-big">
		<div class="concat-gray-xian"></div>
		<div class="concat-newp">NEWP RODICTSCAR°</div>
		<div class="concat-moto-big">
			<div class="concat-moto-left">MOTORECYCLE TYPE</div>
			<div class="concat-moto-right">联系我们</div>
		</div>
	</div>
<!--底部开始-->
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
