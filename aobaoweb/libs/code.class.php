<?php

class code
{
    public $width = 120;
    public $heigth = 42;
    public $font = '23456789qwertyuopasdghkzxcvbnmQWERYUPASDFGHKZXCVBNM';
    public $img;
    public $str;

    function __construct($path)
    {
       $this->img = imagecreatetruecolor($this->width, $this->heigth);
       $this->path=$path;
    }

    function getcolor($type = 'b')
    {
        if ($type == 'b') {
            $r = mt_rand(10, 120);
            $g = mt_rand(10, 120);
            $b = mt_rand(10, 120);
        } else if ($type == 'l') {
            $r = mt_rand(120, 255);
            $g = mt_rand(120, 255);
            $b = mt_rand(120, 255);
        }
        $color = imagecolorallocate($this->img, $r, $g, $b);
        return $color;
    }

    function fill()
    {
        imagefill($this->img, 0, 0, $this->getcolor());
    }

    function getdian()
    {
        for ($i = 0; $i < 20; $i++) {
            imagesetpixel($this->img, mt_rand(0, $this->width), mt_rand(0, $this->heigth), $this->getcolor());
        }
    }

    function getxian(){
        for ($i=0;$i<5;$i++){
            imageline($this->img,mt_rand(0, $this->width),mt_rand(0, $this->heigth),mt_rand(0, $this->width),mt_rand(0, $this->heigth),$this->getcolor());
        }
    }

    function getword(){
        for ($i=0;$i<4;$i++){
            $text=$this->font[mt_rand(strlen($this->font[0]),strlen($this->font)-1)];
            $x=mt_rand($i*30,$i*30+10);
            $y=mt_rand(20,40);
            imagettftext($this->img,mt_rand(18,22),mt_rand(-10,10),$x,$y,$this->getcolor('l'),$this->path,$text);
            $this->str.=$text;
        }
//        session_start();
        $_SESSION['code']=$this->str;
    }

    function oup()
    {
        $this->fill();
        $this->getdian();
        $this->getxian();
        $this->getword();
        header('content-type:image/png');
        imagepng($this->img);
        imagedestroy($this->img);
    }

}



