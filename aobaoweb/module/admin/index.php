<?php

class index  extends adminPub
{
    function __construct()
    {
        parent::__construct();
    }

    //登录页面
    function init(){
        $this->smarty->display("admin/login.html");       //设置引用模板文件
    }

    //验证码
    function code(){
        $code= new code("./assets/fonts/font.ttf");
        $code->oup();
    }

    //判断登录
    function checkpass(){
        $code=$_POST['code'];

        $scc=strtoupper($this->session->get('code'));
        if(strtoupper($code)!=$scc){
            $this->jump("验证码错误","index.php");
            exit;
        }
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        $db=new db();
        $db->table='user';
        $arr=$db->setOne('*'," user = '$user'");

        if($arr){
            if($arr['pass']==md5($pass)){
                $this->session->session("user",$arr['user']);
                $this->jump("登录成功","index.php?a=index");
            }else{
                $this->jump("密码错误","index.php");
                exit;
            }
        }else{
            $this->jump("账号不存在","index.php");
            exit;
        }
    }

    //后台主页
    function index(){
//        $user=$_SESSION['user'];
        $user = $this->session->get('user');
        if(!$user){
            $this->jump("请先登录","index.php");
            exit;
        }
        $this->smarty->assign("user","$user");
        $this->smarty->display("admin/index.html");
    }

    function out(){
        $this->session->del("user");
        $this->jump("退出成功","index.php");
    }

}