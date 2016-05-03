<?php
//获取用户的json文件
header("Content-type: text/html; charset=utf-8");
$id=1 ;//用户的id
$order= "1-1448022655" ;//订单号
$content =file_get_contents("../".$id."/".$order.".json");
echo  $content;




?>