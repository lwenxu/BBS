<?php
/**
 * Created by PhpStorm.
 * User: Liwen
 * Date: 2016/3/21
 * Time: 23:10
 */
class Vcode{
    private $width=100;
    private $height=100;
    private $num=4;
    private $code;
    private $img;
    function __construct($width,$height,$num)
    {
        $this->width=$width;
        $this->height=$height;
        $this->num=$num;
        $this->code=$this->creatcode();
    }
    function getcode(){
        return $this->code;
    }
    function view(){
        $this->creatback();
        $this->font();//
        $this->ganrao();
        $this->printcode();

    }
    private function creatcode(){
        $codes="1234567890qwertyuasdfghjklzxcvbnm";
        $code="";//这里必须要有，否则下面会以为那个连接的点是变量名
        for($i=0;$i<$this->num;$i++){
            $code.=$codes[rand(0,strlen($codes)-1)];
        }
        return $code;
    }
    private function creatback(){
        //创建图片
        $this->img=imagecreatetruecolor($this->width,$this->height);
        //生成背景
        $bgcolor=imagecolorallocate($this->img,rand(200,255),rand(200,255),rand(200,255));
        //对图片填充颜色
        imagefill($this->img,0,0,$bgcolor);
    }
    private function printcode(){
        //生成头信息，防止文件下载
//        header("Content-Type:image/png");
        //        显示图像
        imagepng($this->img);
    }
    private function font(){
        for($i=0;$i<4;$i++){
            $bgcolor=imagecolorallocate($this->img,rand(0,200),rand(0,200),rand(0,200));
            $x=3+($this->width/4)*$i;
            $y=($this->height/2);
            $fontsize=rand(100,200);
            imagechar($this->img,$fontsize,$x,$y,$this->code{$i},$bgcolor);
        }
    }
    private function ganrao(){
        for($i=0;$i<100;$i++){
            $bgcolor=imagecolorallocate($this->img,rand(0,200),rand(0,200),rand(0,200));
            imagesetpixel($this->img,rand(1,$this->width-2),rand(1,$this->height-2),$bgcolor);
        }
    }
}