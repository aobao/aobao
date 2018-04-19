<?php

class comment extends adminPub
{
    function __construct()
    {
        parent::__construct();
    }

    //内容页面
    function comment(){
        $db = new db();
        $db->table = 'try';
        $arrs=$db->setOne('count(*) as ac');
        $p=new page((int) $arrs['ac'],4);
        $p->page();
        $limt=$p->limit;
        $arr=$db->setALL("*","1 ".$limt);

        $this->smarty->assign("arr", $arr);
        $this->smarty->assign("str", $p->str);

        $this->smarty->display("admin/comment.html");
    }

    //删除内容
    function delcomment(){
        $id=$_GET['id'];
        $db=new db();
        $db->table = 'try';
        $row = $db->del("id=$id");
        if ($row == 1) {
            $this->jump("删除成功", "index.php?f=comment&a=comment");
        } else {
            $this->jump("删除失败", "index.php?f=comment&a=comment");
            exit;
        }

    }


    //修改内容页面
    function updatecom(){
        $id=$_GET['id'];
        $db = new db();
        $db->table = 'try';
        $arr=$db->setOne('*', "id='$id'");
        $this->smarty->assign("arr", $arr);
        $this->smarty->display("admin/updatecomment.html");
    }


//    function ac($ccid){
//        $cid=$ccid;
//        $db = new db();
//        $db->table = 'category';
//        $str = "";
//        $this->funcc($db,$cid,$str);
//        return $str;
//    }

//    function funcc($db,$cid ,&$str, $id = 0, $n = 0){
//        $arr = $db->setALL('*', "cid=$id");
//        $pad = str_repeat("-&ensp;", "$n");
//        foreach ($arr as $item) {
//            $selected = $item['id']==$cid ? 'selected' : '';
//            $str .= "
//                      <option value=\"{$item['id']}\" $selected>{$pad}{$item['name']}</option>
//                        ";
//            $this->funcc($db,$cid,$str,$id = $item['id'], $n + 2);
//        }
//    }

    function updatecomchack(){
        $id=$_POST['id'];
        $xilie=$_POST['xilie'];
        $province=$_POST['jingxiao'];
        $jingxiao=$_POST['jingxiao'];
        $type=$_POST['type'];
        $name=$_POST['name'];
        $sex=$_POST['sex'];
        $phone=$_POST['phone'];
        $date=$_POST['date'];
        $con=$_POST['con'];

        $db = new db();
        $db->table = 'try';
        $row=$db->upd("xilie='$xilie',province='$province',jingxiao='$jingxiao',message='$con',type='$type',name='$name',date='$date',phone='$phone',sex='$sex'","id='$id'");

        if ($row == 1) {
            $this->jump("修改成功", "index.php?f=comment&a=comment");
        } else {
            $this->jump("修改失败", "index.php?f=comment&a=comment");
            exit;
        }
    }


}