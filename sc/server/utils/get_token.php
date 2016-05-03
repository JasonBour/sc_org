<?php
//用于定时获取access_token
//使用时 直接使用 变量  $static_token


require_once "../config.php";
$token_file = "./token.json";

$file_res = json_decode(file_get_contents($token_file),true);

//如果文件里面的时间比当前时间小 或者时间不存在
if ($file_res["expires_time"]<time() or !$file_res["expires_time"] ) {

$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$id}&secret={$secrect}";
$res = json_decode(file_get_contents($url),true);
$file_res["access_token"] = $res["access_token"];
$static_token = $res["access_token"];
$file_res["expires_time"] = $res["expires_in"]+7100;
}
esle{
$static_token = $file_res["access_token"];
}







?>