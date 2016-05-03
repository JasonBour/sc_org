<?php
/*
通过客户端的请求返回模板json文件
*/
header("Content-type: text/html; charset=utf-8");


$file = file_get_contents("templates.json");
	echo $file;

?>