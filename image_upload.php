<?php
$s =new SaeStorage();
$i=$_FILES['file']['name']; //文件名
$domain='jason'; //storage名
$s->upload( $domain , $i ,$_FILES['file']['tmp_name'] ); //上传
?>