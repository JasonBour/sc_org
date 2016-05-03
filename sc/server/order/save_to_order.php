<?php
session_start();
//这个文件是将对应用户的订单信息封装到json文件里面
$order = $_SESSION["order"];
$_SESSION["id"]=1;



//$json =file_get_contents($order.".json");
$json = file_get_contents("../utils/index.json");
$json_array = json_decode($json,true);

//这里判断一下是   保存封面还是 保存其他的 
/**我会post  一个 值 $_POST["id"] 用于判断是json文件的哪一部分  订单信息 单独放在一个文件里面去操作
0 代表 封面
1 代表 1~12月

$_POST["main_title"]
$_POST["sub_title"]
$_POST["orna_color"]
$_POST["orna_shape"]
$_POST["orna_posi"]



$_POST["mounth"]  月份  对应着 一月
$_POST["number"]  模板对应的数量
$_POST["content0"] 每一块内容对应的内容
**/


/** 测试用数据
$_POST["id"]= 1;
$_POST["template"]= 1;
$_POST["mounth"]  = "二月";
$_POST["number"]  = 2;
$_POST["content0"] ='<div><img src="jaosn"></img></div>';
$_POST["content1"] ='<div><img src="jaosnbourne"></img></div>';

**/
if($_POST["id"]==0){
   $json_array["封面"]["主标题"] =$_POST["main_title"];
   $json_array["封面"]["副标题"] =$_POST["sub_title"];
   $json_array["封面"]["装饰颜色"] =$_POST["orna_color"];
   $json_array["封面"]["装饰形状"] =$_POST["orna_shape"];
   $json_array["封面"]["装饰位置"] =$_POST["orna_posi"];
   $json_array["封面"]["内容"] = $_POST["content"];
   
}else{
    $json_array[$_POST["mounth"]]["模板"] = $_POST["template"] ;
    for ($i=0; $i <$_POST["number"] ; $i++) { 
    $content = array('内容'.$i =>$_POST["content".$i]);
    $json_array[$_POST["mounth"]]["内容"][$i] = $content;
    
    }




}



//file_put_contents($order.".json", json_encode($json_array,JSON_UNESCAPED_UNICODE));


//对应的  文件夹/文件
file_put_contents("../".$_SESSION["id"]."/".$order.".json", json_encode($json_array,JSON_UNESCAPED_UNICODE));






?>