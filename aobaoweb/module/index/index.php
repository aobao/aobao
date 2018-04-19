<?php

class index  extends indexPub
{
    function __construct()
{
    parent::__construct();
}
    //首页
    function init(){
        $db=new db();
        $db->table='carinfo';
        $row=$db->setALL('*','id>0 limit 0,3');
        $all=$db->setALL('*','id>0 limit 0,6');

        // var_dump($row);
        // exit;
        $this->smarty->assign('arr',$row);
        $this->smarty->assign('brr',$all);
        $this->smarty->display("index.html");
    }

//  品牌车型
function type()
{
    $db = new db();
    $db->table = 'carinfo';

    $arrs=$db->setOne('count(*) as ac');
    $p=new inpage((int) $arrs['ac'],9);
    $p->page();
    $limt=$p->limit;
    $arr=$db->setALL("*","cid=1 ".$limt);

    $this->smarty->assign("arr", $arr);
    $this->smarty->assign("str", $p->str);
    $this->smarty->display("car.html");
}

// 品牌中心
// 品牌中心
 function center(){
     $db=new db();
     $db->table='news';
     $all=$db->setALL('*','type=1 limit 0,3');
     $row=$db->setOne("count(*) as total");
     $page=new centerpage((int) $row['total'],5);
     $page->centerpage();
     $pagestr=$page->str;
     $limit=$page->limit;
     $row=$db->setALL("*","1 $limit");

     // var_dump($row);
     // exit;
     $this->smarty->assign('arr',$row);
     $this->smarty->assign('brr',$all);
     $this->smarty->assign('page',$pagestr);
   $this->smarty->display('center.html');
 }
//车主服务
  function server(){
    $this->smarty->display('server.html');
  }
// 联系我们
   function concat(){
     $this->smarty->display('contact.html');
   }
//企业文化
  function cardet(){
    $this->smarty->display('cetdet.html');

  }

//车主服务表单提交
 function trymesssage(){
   // var_dump($_REQUEST);
   // exit;
   $xilie=$_REQUEST['cartype'];
   $type=$_REQUEST['xing'];
   $province=$_REQUEST['province'];
   $jingxiao=$_REQUEST['carname'];
   $name=$_REQUEST['name'];
   $sex=$_REQUEST['sex'];
   $phone=$_REQUEST['tel'];
   $date=$_REQUEST['date'];
   $message=$_REQUEST['comment'];
   $db=new db();
   $db->table='try';
   $row=$db->int('xilie,type,province,jingxiao,name,sex,phone,date,message',"'$xilie','$type','$province','$jingxiao','$name','$sex','$phone','$date','$message'");
   // var_dump($row);
   if($row==1){
     echo '提交成功，敬请期待';
   }else{
     echo '提交失败,请重新尝试';
   }
 }
 function leavemessage(){
   // var_dump($_REQUEST);
   // exit;
   $name=$_REQUEST['name'];
   $tel=$_REQUEST['tel'];
   $email=$_REQUEST['email'];
   $message=$_REQUEST['message'];
   $db=new db();
   $db->table='concat';
   $row=$db->int('name,tel,email,message',"'$name','$tel','$email','$message'");
   if($row==1){
     echo '提交成功，感谢您';
   }else{
     echo '不好意思，请再来一次';
   }
 }




}
