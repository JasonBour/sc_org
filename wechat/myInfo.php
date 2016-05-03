<?php
header("Content-type:text/html;charset=utf-8");
$APPID ="wx0b1ca0cf7912b1fb";
$SECRET ="f9e351c152438953b51f20c447747038";
$image = './image/round.jpg';
$name= "请先登录";
if (isset($_GET['code'])){
   // echo $_GET['code'];
//通过网页授权获取acess_token
   $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$APPID}&secret={$SECRET}&code={$_GET['code']}&grant_type=authorization_code";
  $content = file_get_contents($url);
 //echo "<br>";
 
  $arr = json_decode($content,true);
  //var_dump($arr);
  //echo "<br>";
 // echo  $arr['refresh_token'];

/**   文档第三步  刷新access_token

  $refresh_json=file_get_contents("https://api.weixin.qq.com/sns/oauth2/refresh_token?appid={$APPID}&grant_type=refresh_token&refresh_token={$arr['refresh_token']}");

echo "<br>";
  var_dump($refresh_json);
**/

  
//echo "<br>";
echo $arr['openid'];
  $target = "https://api.weixin.qq.com/sns/userinfo?access_token={$arr['access_token']}&openid={$arr['openid']}}&lang=zh_CN";
  $result =json_decode(file_get_contents($target),true);
  
  $image=$result['headimgurl'];
  $name = $result['nickname'] ;}
   
else{}
?>



<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./css/image.css">

 <link rel="stylesheet" type="text/css" href="./css/footer.css">
<script src="./js/jquery.min.js"></script> 
  
</head>
<body >

<!--navigator-->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="opacity: 0.55;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">必要</a>
        </div>
        <div class="collapse navbar-collapse" >
          <ul class="nav navbar-nav" >
            <li ><a href="demo1.html">首页</a></li>
            <li class="active" ><a href="myInfo.html">个人中心</a></li>
            <li><a href="#">联系我们</a></li>
            <li> <a  href="#">购物车</a></li>
            <li><a  href="#">不知道</a></li><!--sorry   that's an mistake ,it should be sign in-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
<!--image and background-->	


	<div style="float: left;background-color:#9d9d9d;margin-top:20px;margin-bottom: 20px;" >

	<img src="<?php echo $image;?>"  class="img-responsive center-block img-circle  image"  >

</div>

    <div    style="float: left;background-color:#9d9d9d;margin-top:20px;" >
    
    <h2 class="text-center"><?php echo $name ; ?></h2>
    	
    </div>






<!--different buttons-->
<div class="buttom center-block" style="margin-top: 30px;">
<div class="choose" style="margin-left: 20px;margin-right: 20px;">


<a href="#"><button type="button" class="btn btn-primary btn-lg btn-block bootom" >我的订单</button></a>
<a href="#"><button type="button" class="btn btn-primary btn-lg btn-block bootom">我的作品集</button></a>
<a href="#"><button type="button" class="btn btn-primary btn-lg btn-block bootom">退款管理</button></a>
<a href="#"><button type="button" class="btn btn-primary btn-lg btn-block  bootom"  >我的消息</button></a>
<a href="location.html"><button type="button" class="btn btn-primary btn-lg btn-block  bootom">我的地址</button></a>
<a href="#"><button type="button" class="btn btn-primary btn-lg btn-block bootom  ">客服中心</button></a>
</div>

</div>



<!--footer-->
<div >
  

</div>
 <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./css/image.css">

 <link rel="stylesheet" type="text/css" href="./css/footer.css">
<script src="./js/jquery.min.js"></script> 
<script type="text/javascript" src="./js/bootstrap.min.js"></script> 
	<script type="text/javascript" src="./js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

