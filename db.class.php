<?php
header("content-type:text/html;charset=utf8");
class db
{
    private $host='localhost';
    private $username='root';
    private $pass='';
    private $dbname='aobao';
    private $port=3306;

    public $table;
    public $db;

    function __construct()
    {
        $this->db=new mysqli($this->host,$this->username,$this->pass,$this->dbname,$this->port);
        $this->db->query('set names utf8');
    }

    function setOne($fle='*',$if=null){
        if($if){
            $sql="select ".$fle." from ".$this->table." where ".$if." ";
        }else{
            $sql="select ".$fle." from ".$this->table." ";
        }
        $result=$this->db->query($sql);
        return $result->fetch_assoc();
    }

    function setALL($fle='*',$if=null){
        if($if){
            $sql="select ".$fle." from ".$this->table." where ".$if." ";
        }else{
            $sql="select ".$fle." from ".$this->table." ";
        }
        $result=$this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function del($if=null){
            $sql="delete from ".$this->table." where ".$if." ";
            $this->db->query($sql);
            return $this->db->affected_rows;
    }

    function int($file,$values){
        $sql="insert into ".$this->table." (".$file.") values ( ".$values." ) ";
        $this->db->query($sql);
        return $this->db->affected_rows;
    }

    function upd($vals,$if){
        $sql="update ".$this->table."  set  ".$vals." where ".$if;

        $this->db->query($sql);
        return $this->db->affected_rows;
    }

    function close(){
        $this->db->close();
    }


}


//$db = new db();
//$db->table='comment';
//var_dump($db->setOne('*',"id=5"));
//var_dump($db->int("name,content","'aa','bb'"));
//var_dump($db->upd("name='sadasd',content='wdwwdwd'","id=19"));
//var_dump($db->del("id=6"));
