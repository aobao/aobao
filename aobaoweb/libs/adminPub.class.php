<?php

class adminPub{
    protected   $smarty;
    protected   $session;
    function __construct()
    {
        $this->smarty=new Smarty();
        $this->smarty->setTemplateDir('templates');       //设置引用模板地址
        $this->smarty->setCompileDir('compile'); //设置编译完的文件地址
        $this->session = new session();
    }

    //封装跳转
    function jump($mess,$href){
        $this->smarty->assign("mess",$mess);
        $this->smarty->assign("href",$href);
        $this->smarty->display("admin/mess.html");
    }

}