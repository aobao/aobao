<?php

class indexPub{
    protected   $smarty;
    protected   $session;
    function __construct()
    {
        $this->smarty=new Smarty();
        $this->smarty->setTemplateDir('templates/index');       //设置引用模板地址
        $this->smarty->setCompileDir('compile'); //设置编译完的文件地址
        $this->session = new session();
    }



}