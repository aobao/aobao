<?php
header("content-type:text/html;charset=utf8");

class upload{
    private $path="upload";
    private $file;
    function __construct($file){
        $this->file = $file;
    }
    function load(){
        //创建文件
        date_default_timezone_set("Asia/Shanghai");
        if(!is_dir($this->path)){
            mkdir($this->path);
        }
        $this->path = $this->path."/".date('Y-m-d');
        if(!is_dir($this->path)){
            mkdir($this->path);
        }
        //修改文件件名字
        $imgname = microtime(true).mt_rand(0,999999).$this->file['name'];
        if(is_uploaded_file($this->file['tmp_name'])){
            $imgsss=move_uploaded_file($this->file['tmp_name'],$this->path."/".$imgname);
            if($imgsss){
                echo "/aobaoweb/upload/".date('Y-m-d')."/".$imgname;
            }
        }
    }
}

