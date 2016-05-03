<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
	<title></title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>

<div class="f_box f_editor_setting" id="f_editor_setting" style="display:block;">
        <div class="f_header" id="f_header_setting">
            <span class="f_header_text">创建作品</span>
           
            
        </div>

<article>
	<span>测试过程中先使用第一个台历的"立即定制按钮"</span>
		<div class="f_create_box">
			<span class="f_create_box_img"><img src="./images/cal_03.jpg"></span>
           <p class="detail">8寸横款台历，22 x 16cm</p>
           <p class="detail">26P，最少需13张照片</p>
           <p class="detail">四色印刷：58元 | 六色印刷：68元</p>
           <div class="button">
                    <span class="f_create_btn f_create_btn_create"  id="calendar_1">立即定制</span>
                    <span class="f_create_btn f_create_btn_infos">了解详情</span>
                </div>
		</div></li>

        <div class="f_create_box">
        	<span class="f_create_box_img"><img src="./images/cal_05.jpg"></span>
           <p class="detail">8寸横款台历，22 x 16cm</p>
           <p class="detail">26P，最少需13张照片</p>
           <p class="detail">四色印刷：58元 | 六色印刷：68元</p>
           <div class="button">
                    <span class="f_create_btn f_create_btn_create"  id="calendar_2">立即定制</span>
                    <span class="f_create_btn f_create_btn_infos">了解详情</span>
                </div>

        </div>
	    <div class="f_create_box">
	    	<span class="f_create_box_img"><img src="./images/cal_07.jpg"></span>
           <p class="detail">8寸横款台历，22 x 16cm</p>
           <p class="detail">26P，最少需13张照片</p>
           <p class="detail">四色印刷：58元 | 六色印刷：68元</p>
           <div class="button">
                    <span class="f_create_btn f_create_btn_create" id="calendar_3" >立即定制</span>
                    <span class="f_create_btn f_create_btn_infos">了解详情</span>
                </div>
	    </div>


</article>
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/index.js"></script>
</body>
</html>

<?php
require_once "config.php";
$content =file_get_contents("https://api.weixin.qq.com/sns/oauth2/access_token?appid={$id}&secret={$secrect}&code={$_GET['code']}&grant_type=authorization_code");
$arr = json_decode($content,true);
/**
//网页的access_token
$access_token = $arr['access_token'];
//open_id
$open_id= $arr['openid'];



//获取用户信息的url
$user_info = "https://api.weixin.qq.com/sns/userinfo?access_token={$arr['access_token']}&openid={$arr['openid']}}&lang=zh_CN";
$info =json_decode(file_get_contents($user_info),true);
**/
//微信账号
//这里把用户的数据传到数据库里面
$wechat =$arr['openid'];
$_SESSION['user'] =$wechat;
mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
mysql_select_db('mimo');
if(!mysql_num_rows(mysql_query("SELECT * FROM users WHERE wechat='jason1'"))){
mysql_query("INSERT INTO users (wechat) VALUES('{$wechat}') ");
}
  







?>