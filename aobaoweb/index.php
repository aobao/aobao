<?php
header("content-type:text/html;charset=utf8");

//网络根目录
define("WEB_PATH","http://".$_SERVER["HTTP_HOST"].substr($_SERVER["REQUEST_URI"],0,strrpos($_SERVER["REQUEST_URI"],"/"))."/");
//本地根目录
define("ROOT_PATH",__DIR__."/");
//libs根目录
define("LIBS_PATH",ROOT_PATH."libs/");
//css根目录
define("CSS_PATH",WEB_PATH."assets/css/");
//js根目录
define("JS_PATH",WEB_PATH."assets/js/");
//img根目录
define("IMG_PATH",WEB_PATH."assets/img/");
//font根目录
define("FONT_PATH",WEB_PATH."assets/fonts/");
//iconfont根目录
define("ICONFONT_PATH",WEB_PATH."assets/iconfont/");
//kind(富文本编辑器)根目录
define("KIND_PATH",WEB_PATH."assets/kindeditor/");

//引入上传
include_once LIBS_PATH."page.class.php";
include_once LIBS_PATH."inpage.class.php";
include_once LIBS_PATH."centerpage.php";
//引入上传
include_once LIBS_PATH."upload.class.php";
//引入smarty
include_once LIBS_PATH."Smarty.class.php";
//引入数据库
include_once LIBS_PATH."db.class.php";
//引入session
include_once LIBS_PATH."session.class.php";
//引入code
include_once LIBS_PATH."code.class.php";
//引入后台公共文件
include_once LIBS_PATH."adminPub.class.php";
//引入后台公共文件
include_once LIBS_PATH."indexPub.class.php";
//引入地址配置文件
include_once LIBS_PATH."router.php";
$obj=new router();
$obj->out();
