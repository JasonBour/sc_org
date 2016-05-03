<?php
header("Content-Type: text/html;charset=utf-8");


$data = '{"data":[{"name":"android","ImageUrl":"http://imglf0.ph.126.net/4FEApfRi41Mma2faOliLnw==/1149543804904385610.jpg","content":"没失","distance":"2.1km","time":"3.20pm"}, 
{"name":"php","ImageUrl":"http://imglf1.ph.126.net/EVzpip9goxn1P3ClDmwMyA==/2438136248285959588.jpg","content":"没失眠","distance":"2.1km","time":"3.20pm"},
{"name":"adapter","ImageUrl":"http://imglf1.ph.126.net/Wxehyiy7vt7cuNjg04v4SQ==/6619341474189439456.jpg","content":"没失眠","distance":"2.1km","time":"3.20pm"},
{"name":"inflatin","ImageUrl":"http://imglf2.ph.126.net/mM_dnDCWSTONYhfy-qyR8Q==/6619510798980117986.jpg","content":"没失眠","distance":"2.1km","time":"3.20pm"}]}';

/**  test
$name = urlencode($_REQUEST['name']);
$ImageUrl =$_REQUEST['ImageUrl']; 
$content = urlencode($_REQUEST['content']);

$time ;
$distance ;


$_REQUEST[''];

$arrayName = array('name' => $name,'ImageUrl'=>$ImageUrl ,'content'=>$content,'distance'=>$distance,'time'=>$time);
$json = json_encode($arrayName);
$data_string = json_decode($data,true);

var_dump($data_string);
$data = array_merge($data_string,$arrayName);
var_dump($data);

**/



echo $data;

?>