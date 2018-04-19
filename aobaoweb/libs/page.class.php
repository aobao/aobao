<?php
header("content-type:text/html;charset=utf8");

class page
{
    private $cues;         //所有的条数
    private $cuesnub;          //每一页有几个
    private $pagenubs ;      //所有的页数     $cues / $cuesnub
    private $page;          //page=
    public  $str='';
    public  $limit;
    
    function __construct($cues,$cuesnub)
    {
        $this->cues=$cues;
        $this->cuesnub=$cuesnub;
        $this->pagenubs=ceil($this->cues/$this->cuesnub);
    }

    //一共的页数  首页  上一页   1 2 3 4 5  下一页   尾页
    function page(){
        $this->page=isset($_GET['page'])?$_GET['page']:0;    //当前页面
        $url=isset($_GET['page'])? explode('page=',$_SERVER['REQUEST_URI'])[0].'page=':$_SERVER['REQUEST_URI']."&page=0";

        $this->str.="<div class='btn-group' style='margin-top: 12px'>";


//        $this->str.="<div>一共有<span>$this->pagenubs</span>页</div>";
        $this->str.="<a href='{$url}0' target='iframe0'><button class='btn btn-white'>首页</button></a>";

        $upper=$this->page-1<0?0:$this->page-1;               //上一页
        $this->str.="<a href='{$url}{$upper}' target='iframe0'><button type='button' class=\"btn btn-white\">
                                      <i class=\"fa fa-chevron-left\"></i>
                             </button></a>";

        $sks=$this->page-2 < 0 ? 0 : $this->page-2;
        $sjs=$this->page+2 > $this->pagenubs-1 ? $this->pagenubs-1 : $this->page+2;
        for ($i=$sks;$i<=$sjs;$i++){
            $num = $i+1;
            if($i==$this->page){
                $this->str.="<a ><button class='btn btn-white  active' >{$num}</button></a>";
            }else{
                $this->str.="<a href='{$url}{$i}' target='iframe0'><button class='btn btn-white'>{$num}</button></a>";
            }
        }

        $lower=$this->page+1>$this->pagenubs-1?$this->pagenubs-1:$this->page+1;   //下一页
        $this->str.=" <a href='{$url}{$lower}' target='iframe0'><button type='button' class='btn btn-white'>
                                <i class='fa fa-chevron-right'></i>
                     </button></a>";

        $lats=$this->pagenubs-1;                            //尾页
        $this->str.="<a href='{$url}{$lats}' target='iframe0'><button class='btn btn-white'>尾页</button></a>";
        $this->str.="</div>";


        $acac=$this->page*$this->cuesnub;
        $this->limit="limit  {$acac} , {$this->cuesnub}";

    }

}
//$p=new page(101,10);
//$p->page();
//
//echo $p->str;
//echo $p->limit;