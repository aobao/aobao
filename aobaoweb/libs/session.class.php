<?php
header("content-type:text/html;charset=utf8");

class session{
    //开启session
    function __construct()
    {
        session_start();
    }
    //创建session
    function session($name,$vals){
        $_SESSION[$name]= $vals;
    }
    //获取session
    function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return null;
        }
    }
    //删除session
    function del($name){
        unset($_SESSION["$name"]);
    }
}
//$ses = new session();
//$ses->session("aa","bb");
//$ses->del("aa");
