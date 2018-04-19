<?php
header("content-type:text/html;charset=utf8");


class router{
    private $m;
    private $f;
    private $a;

    function __construct()
    {
        $this->m=isset($_GET['m'])? $_GET['m']:'admin';
        $this->f=isset($_GET['f'])? $_GET['f']:'index';
        $this->a=isset($_GET['a'])? $_GET['a']:'init';
    }

    function out(){
        $path="./module/".$this->m;
        if(is_dir($path)){
            $path.="/".$this->f.".php";
            if(is_file($path)){
                include_once "$path";
                if (class_exists("$this->f")){
                    $li=$this->f;
                    $obj=new $li();
                    if(method_exists($obj,"$this->a")){
                        $Method=$this->a;
                        $obj->$Method();
                    }else{
                        echo "这个方法不存在";
                    }
                }else{
                    echo "这个类不存在";
                }
            }else{
                echo "这个文件不存在";
            }
        }else{
            echo "这个模型不存在";
        }
    }

}
