<?php

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
<!--头部-->
<div class="f_box f_editor_setting" id="f_editor_setting" style="display:block;">
        <div class="f_header" id="f_header_setting">
            <span class="f_header_text">我的作品</span>
            <!--
             <span class="f_header_btn create">创建</span>
             -->

             <span class="f_header_btn users"  style="float: right;right: 10px;width: 50px;">
             	
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
        
             </span> 
        </div>
		<div class="products">
			<div class="product">
				<div class="product_img_2">
					<img src="./images/calendar_h.png" class="user-order-image">
				</div>
				<div class="product_text">
					<p class="main_title">《主标题》</p>
					<p class="sub_title">副标题</p>
				</div>
				<div class="f_setting" id="line"></div>
				<div class="product_more">
					<p class="more" ></p>
					<p class="more"></p>
					<p class="more"></p>
				</div>
			</div>
			<div class="f_setting_lines"></div>
			

<div class="menu_show" id="menu" style="right: 10px;">
  <p class="menu_item ">编辑</p>
  <div class="f_setting_lines "></div>
  <p class="menu_item delete ">删除</p>
</div>

<div  id="users" >
  <p class="menu_item create">创建</p>
  <div class="f_setting_lines menu_line"></div>
  <p class="menu_item user">我的订单</p>
</div>








		</div>



</div>






<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/index.js"></script>
</body>
</html>