<?php

/**
require_once "jssdk.php";
require_once "config.php";
//$jssdk = new JSSDK(appId,appSecrect);  //sdk初始化
$signPackage = $jssdk->GetSignPackage();
**/
require_once "config.php";
$redirect_uri ="http://universities.sinaapp.com/sc/index.php";   //重定向网址
$scope ="snsapi_userinfo" ; //认证类型
$state = "1";  //只是一个可以带上的参数 
$user_redirct="https://open.weixin.qq.com/connect/oauth2/authorize?appid={$id}&redirect_uri={$redirect_uri}&response_type=code&scope={$scope}&state={$state}#wechat_redirect"; //域名重定向  定向的过程也是获取用户信息的过程
header("location:{$user_redirct}")

?>