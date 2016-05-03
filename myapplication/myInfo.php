<?php
header("Content-type:text/html;charset=utf-8");
$name = $_GET['name'];
$image = $_GET['image'];

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="../wechat/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../wechat/css/image.css">
 <link rel="stylesheet" type="text/css" href="../wechat/css/footer.css">
<script src="../wechat/js/jquery.min.js"></script> 
  
</head>
<body >

<!--navigator-->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="opacity: 0.55;">
      <div class="container">
        <div class="navbar-header">
          
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse" >
          
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
<!--image and background-->	


	<div style="float: left;background-color:#9d9d9d;margin-top:20px;margin-bottom: 20px;width:100%" >

	<img src="<?php echo $image;?>"  class="img-responsive center-block img-circle  image"  style="width:300px;">
  <h2 class="text-center"><?php echo $name ; ?></h2>
</div>

    






<!--different buttons-->
<div class="buttom center-block" style="margin-top: 30px;">
<div class="choose" style="margin-left: 20px;margin-right: 20px;">


<a href="#"><button type="button" class="btn btn-primary btn-lg btn-block bootom" >我的订单</button></a>
<a href="#"><button type="button" class="btn btn-primary btn-lg btn-block bootom">我的作品集</button></a>
<a href="#"><button type="button" class="btn btn-primary btn-lg btn-block bootom">退款管理</button></a>
<a href="#"><button type="button" class="btn btn-primary btn-lg btn-block  bootom"  >我的消息</button></a>
<a href="location.php"><button type="button" class="btn btn-primary btn-lg btn-block  bootom">我的地址</button></a>
<a href="#"><button type="button" class="btn btn-primary btn-lg btn-block bootom  ">客服中心</button></a>
</div>

</div>



<!--footer-->
<div >
  

</div>
 <link rel="stylesheet" type="text/css" href="../wechat/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../wechat/css/image.css">

 <link rel="stylesheet" type="text/css" href="../wechat/css/footer.css">
<script src="../wechat/js/jquery.min.js"></script> 
<script type="text/javascript" src="../wechat/js/bootstrap.min.js"></script> 
	<script type="text/javascript" src="../wechat/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

