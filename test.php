<?php
/**
 * Created by PhpStorm.
 * User: xpf19
 * Date: 2016/9/14
 * Time: 12:47
 */

include_once './apis/code.class.php';
$vcode=new Vcode(100,30,4);
$vcode->getcode();
$vcode->view();