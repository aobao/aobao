<?php

class update extends adminPub
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
        // var_dump($img);
    }


    //密码页面
    function checkpass()
    {
        $user = $this->session->get('user');
        $this->smarty->assign("user", "$user");
        $this->smarty->display("admin/checkpass.html");
    }

    //修改密码判断
    function checkpasscheck()
    {
        $user = $_POST['zhanghao'];
        $oldpass = md5($_POST['oldpass']);
        $nextpass = md5($_POST['nextpass']);
        $db = new db();
        $db->table = 'user';

        $arrs = $db->setOne('*', "user='$user'");
        if ($oldpass != $arrs['pass']) {
            $this->jump("旧密码不正确", "index.php?f=update&a=checkpass");
            exit;
        }

        $arr = $db->upd("pass='$nextpass'", "user='$user'");
        if ($arr == 1) {
            $this->session->del('user');
            $this->jump("修改成功", "index.php");
        } else {
            $this->jump("修改失败", "index.php?f=update&a=checkpass");
            exit;
        }

    }






    //栏目页面
    function cation()
    {
        $db = new db();
        $db->table = 'carinfo';
        $row=$db->setALL('*','id>0');
        // var_dump($row);
        $this->smarty->assign('arr',$row);
        $this->smarty->display("admin/carinfo.html");
    }
    //获取栏目数据

    //删除车方法
    function delcar()
    {
        $id = $_GET['id'];
        $db = new db();
        $db->table = "carinfo";
        $arr = $db->del("id=$id");
        if ($arr==1) {
           $this->jump('删除成功','index.php?m=admin&f=update&a=cation');
        } else {
          $this->jump('删除失败','index.php?m=admin&f=update&a=cation');
        }
    }

    //添加车信息
    function addcar()
    {
        $this->smarty->display("admin/addcarinfo.html");
    }
    //添加车信息
    function addcarcheck()
    {

        if($_POST['img']!=''){
            $imgs = implode( '--',$_POST['img'] );
        }else{
            $imgs='';
        }

      $name=$_REQUEST['name'];
      $ename=$_REQUEST['ename'];
      $type=$_REQUEST['type'];
      $price=$_REQUEST['price'];
      $des=$_REQUEST['des'];
      $introduce=$_REQUEST['introduce'];
      $eintro=$_REQUEST['eintro'];
     //  var_dump($_REQUEST);
     // exit;
        $db = new db();
        $db->table = 'carinfo';
        $row = $db->int("name,ename,type,price,des,introduce,eintro,img","'$name','$ename','$type','$price','$des','$introduce','$eintro','$imgs'");
        if ($row == 1) {
            $this->jump("添加成功", "index.php?m=admin&f=update&a=cation");
        } else {
            $this->jump("添加失败", "index.php?m=admin&f=update&a=cation");
        }

    }

    //修改栏目页面
    function modifycar()
    {
        $id=$_GET['id'];
        $db = new db();
        $db->table = 'carinfo';
        $arr=$db->setOne("*","id='$id'");
        $this->smarty->assign("arr", $arr);
        $this->smarty->display("admin/modifycarinfo.html");
    }

    //修改栏目
    function updatecatcheck(){
      if($_POST['img']){
          $imgs = implode( '--',$_POST['img'] );
      }

    $imgs=isset($_REQUEST['img'])? $imgs=implode('&',$_REQUEST['img']):'';

    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $ename=$_REQUEST['ename'];
    $type=$_REQUEST['type'];
    $price=$_REQUEST['price'];
    $des=$_REQUEST['des'];
    $introduce=$_REQUEST['introduce'];
    $eintro=$_REQUEST['eintro'];
    // $e=$_REQUEST['eintro'];

      $db = new db();
      $db->table = 'carinfo';
      if($imgs){
        $row=$db->upd("name='$name',ename='$ename',type='$type',price='$price',des='$des',introduce='$introduce',eintro='$eintro',img='$imgs'","id='$id'");
      }else{
        $row=$db->upd("name='$name',ename='$ename',type='$type',price='$price',des='$des',introduce='$introduce',eintro='$eintro'","id='$id'");

      }
      if ($row == 1) {
          $this->jump("修改成功", "index.php?m=admin&f=update&a=cation");
      } else {
          $this->jump("修改失败", "index.php?m=admin&f=update&a=cation");
      }
    }



}
