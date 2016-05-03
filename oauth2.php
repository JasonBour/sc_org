<?php

$APPID ="wx0b1ca0cf7912b1fb";
$SECRET ="f9e351c152438953b51f20c447747038";
if (isset($_GET['code'])){
    echo $_GET['code'];

   $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$APPID}&secret={$SECRET}&code={$_GET['code']}&grant_type=authorization_code";
  $content = file_get_contents($url);
 echo "<br>";
 
  $arr = json_decode($content,true);
  var_dump($arr);
  echo "<br>";
  echo  $arr['refresh_token'];

/**   文档第三部  刷新access_token

  $refresh_json=file_get_contents("https://api.weixin.qq.com/sns/oauth2/refresh_token?appid={$APPID}&grant_type=refresh_token&refresh_token={$arr['refresh_token']}");

echo "<br>";
  var_dump($refresh_json);
**/

  
echo "<br>";
  $target = "https://api.weixin.qq.com/sns/userinfo?access_token={$arr['access_token']}&openid={$arr['openid']}}&lang=zh_CN";
  $result =json_decode(file_get_contents($target),true);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<img src="<?php 
echo $result['headimgurl'];

?>">
<h3> <?php echo $result['nickname'] ; 



}else{
    echo "NO CODE";
}

?></h3>
</body>
</html>