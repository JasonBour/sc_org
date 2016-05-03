<?php
session_start();
header("Content-type: text/html; charset=utf-8");
require_once "../utils/floder_class.php";
$floder = new FileUtil();

//这个文件是在用户第一次创建项目的时候  用于生成订单信息 以及标准的json文件
$openid = $_SESSION['user'];//微信用户的openid

//先获取用户表 中微信号对应的user-id
//$sql = "SELECT id FROM users WHERE wechat={$openid}";


$id=1 ;
$_SESSION["id"]= $id;
//第二步   生成唯一订单号 并且作为 文件名保存到session  并创建相应的文件夹
$floder->createDir("../".$id);
$time = strtotime("now");
$order=$id."-".$time;
$_SESSION["order"]=$order; 

//第三部 生成对应的json文件  在下一步那里将相关信息保存在json文件里   
/*
$_POST["type"]   台历样式
$_POST["year"]    选择的年份
$_POST["date_type"]   日期的样式  农历还是阴历

*/


$json = file_get_contents("../utils/index.json");
$json_array= json_decode($json,true);
$json_array["台历信息"]["台历样式"]=$_POST["cal_type"];
$json_array["台历信息"]["年份"]=$_POST["year"];
$json_array["台历信息"]["日期样式"]=$_POST["date_type"];
$save  =file_put_contents("../".$id."/".$order.".json", json_encode($json_array,JSON_UNESCAPED_UNICODE));  //记得后面的参数 
if($save){
	echo "ok";
}

?>