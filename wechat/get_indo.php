<?php
$id= $_GET['MEDIA_ID'];
$kv = new SaeKV();
// 初始化KVClient对象
$ret = $kv->init();

// 更新key-value

if(isset($id)){
$kv->set('key', $id);
echo "key is set";

}else{

$id = $kv->get('key');
echo $id;
echo "<br>";
}


$APPID ="wx0b1ca0cf7912b1fb";
$SECRET ="f9e351c152438953b51f20c447747038";

$content = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$APPID}&secret={$SECRET}";  //access token 
$result=json_decode(file_get_contents($content),true);
$token= $result['access_token'];
echo $token ;
echo "<br>";

$filename =$id.".jpg";
//$filename ="image.txt";

$url ="http://file.api.weixin.qq.com/cgi-bin/media/get?access_token={$token}&media_id={$id}"; 
$domin= "jason";
$ch = curl_init ($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$output = curl_exec($ch);




$s = new SaeStorage();
$s->write($domin,"access_token.txt",$token);
$fileurl =$s->write($domin,$filename,$output);


?>