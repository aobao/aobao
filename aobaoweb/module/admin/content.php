<?php
class content extends adminPub
{
  function __construct()
  {
      parent::__construct();
  }
  function content(){
    $db=new db();
    $db->table='concat';
    $row=$db->setALL('*');
    $this->smarty->assign('arr',$row);
    $this->smarty->display('admin/leavemess.html');
  }
  function delmess(){
    $db=new db();
    $db->table='concat';
    $id=$_REQUEST['id'];
    $row=$db->del('id');
    if($row==1){
      $this->jump('删除成功','index.php?m=admin&f=content&a=content');
    }else{
      $this->jump('删除失败','index.php?m=admin&f=content&a=content');

    }
  }
}


 ?>
