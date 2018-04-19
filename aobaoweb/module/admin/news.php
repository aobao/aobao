<?php

class news extends adminPub
{
    function __construct()
    {
        parent::__construct();
    }

    //上传图片类开启
    function imgsc()
    {
        $img = new upload($_FILES['file']);
        $img->load();
    }

    function init(){
        $db = new db();
        $db->table = 'news';
        $arr=$db->setALL('*');
        $this->smarty->assign("arr",$arr);
        $this->smarty->display("admin/news.html");
    }

    //删除新闻
    function delnews(){
        $id=$_GET['id'];
        $db=new db();
        $db->table = 'news';
        $row = $db->del("id=$id");
        if ($row == 1) {
            $this->jump("删除成功", "index.php?f=news");
        } else {
            $this->jump("删除失败", "index.php?f=news");
            exit;
        }

    }

    //添加新闻
    function addnews(){
        $this->smarty->display("admin/addnews.html");
    }
    function addnewscheck()
    {
        if($_POST['img']!=''){
            $img = implode( '--',$_POST['img'] );
        }else{
            $img='';
        }
        $title = $_POST['title'];
        $des = $_POST['des'];
        $type = $_POST['type'];
        $content = $_POST['content'];

        $db = new db();
        $db->table = 'news';
        $row = $db->int("title,content,des,img,type","'$title','$content','$des','$img','$type'");

        if ($row == 1) {
            $this->jump("添加成功", "index.php?f=news");
        } else {
            $this->jump("添加失败", "index.php?f=news");
        }
    }

    //修改新闻
    function updnews(){
        $id=$_GET['id'];
        $db = new db();
        $db->table = 'news';
        $arr=$db->setOne("*","id='$id'");
        $this->smarty->assign("arr", $arr);
        $this->smarty->display("admin/updnews.html");
    }
    function updnewscheck()
    {

        if($_POST['img']!=''){
            $img= implode( '--',$_POST['img'] );
        }else{
            $img='';
        }

        $id=$_POST['id'];
        $title = $_POST['title'];
        $des = $_POST['des'];
        $type = $_POST['type'];
        $content = $_POST['content'];

        $db = new db();
        $db->table = 'news';

        if($img){
            $row=$db->upd("title='$title',des='$des',content='$content',img='$img',type='$type'","id='$id'");
        }else{
            $row=$db->upd("title='$title',des='$des',content='$content',type='$type'","id='$id'");
        }

        if ($row == 1) {
            $this->jump("修改成功", "index.php?f=news");
        } else {
            $this->jump("修改失败", "index.php?f=news");
        }
    }


}