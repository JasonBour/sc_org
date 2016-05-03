<?php
session_start();
//想法是先获取id   有两种情况  第一种是新建  第二种是从已经有的载入

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,maximum-scale=1.0">
	<title></title>
	<meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="./css/index.css">
     <link rel="stylesheet" type="text/css" href="./css/calendar_tem.css">
     <style type="text/css">
     .ul{margin:0;padding:0;list-style-type:none;}
    .li{

   height: 33px;
      line-height:33px;
      overflow:hidden;
      float:left;
      margin-right:3px;
      
    }
    .li i{
      background:url("../image/image_operate.png");
      float:left;
      
      width: 33px;
      height: 33px;
    }
    .cat-1 i{
      background-position:0 0;
    }
    .cat-2 i{
      background-position:-42px 0;
    }
    .cat-3 i{
      background-position:-92px 0;
    }
    .cat-4 i{
      background-position:-142px 0;
    }
    .cat-5 i{
      background-position:-204px 0;
    }
    .cat-6 i{
      background-position:-250px 0;
    }</style>
     
</head>
<body>




<!--点击图片出现的遮罩层-->
<div class="cover"  style="height: auto;background-color: #000000;display: block;" >
<div class="f_header header" id="f_header_setting"  >
            
           <span class="f_header_btn cancel">取消</span>
            
            <span class="f_header_text">编辑图片</span>
            

             <span class="f_header_btn save" >保存</span>
        </div>
   <!--操作图片的容器-->

   <div style="position: relative;width: 100%;background: #000000" >


    <div class="set_image" style="overflow: hidden;height: auto;">
     <img src="" id="image_copy"  width="100%" height="auto" >     
    </div>




 <div  class="jason" style="position: absolute;top: 0px; background-size: 258px;">

  <ul class="ul" style="position: relative;">
      
      <li class="cat-1 li" style="position: relative;">
        <i></i>
      </li>

      <li class="cat-2 li">
        <i></i>       
      </li>
      <li class="cat-3 li">
        <i></i>       
      </li>
      <li class="cat-4 li">
        <i></i>     
      </li>
      <li class="cat-5 li">
        <i></i>       
      </li>
      <li class="cat-6 li">
        <i></i>
    </ul>
    
   </div>    
    

     </div>   





  

</div>












<!--头部-->
<div class="f_box f_editor_setting" id="f_editor_setting" style="display:block;">
        <div class="f_header" id="f_header_setting">
            
             <span class="f_header_btn  menu" id="f_header_back">
             	
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
        
             </span>  
           
            <span class="f_header_text">
            <img  id="header_arrow" class="header_arrow pre" src="./image/pre.png" ><span class="mouth_title">封面</span>  <img  id="header_arrow" class="header_arrow nex" src="./image/nex.png"></span>
          

             <span class="f_header_btn f_header_next save_to_order">保存</span>
        </div>



<!--编辑器-->


<div class="div" >
<div  class="div_wrapper">

<img src="./image/content.png"  id="background" >
  <div class="center_1 image_container" id="no1" >
     <img src="./image/upload.png" id="upload" style="position: absolute;" class="upload">
    
  </div>

  <img src=""  class="mounth_icon" id="mounth_icon">



  </div>
  
  </div>
  




<!--底部选项-->

 <div class="f_setting_lines"></div>
<div class="item_container">
   <img src="./image/templates.png" id="templates" class="foot_item">
   <img src="./image/colors.png" id="colors" class="foot_item">
   <img src="./image/bars1.png" id="position" class="foot_item">
   <img src="./image/bars2.png" id="shape" class="foot_item">
</div>

 <div class="f_setting_lines"></div>

<!--具体选项-->
<div class="detail">

 <!--模板详情-->
 <div class="templates show">
   <img src="./images/template_1/1.png" class="template check tem1" id="0">
   <img src="./images/template_1/2.png" class="template  tem2" id="1"> 
   <img src="./images/template_1/3.png" class="template  tem3" id="2">
   <img src="./images/template_1/4.png" class="template tem4" id="3">
   <img src="./images/template_1/5.png" class="template tem5" id="4">
    
 </div> 
  
  

<!--颜色选择-->
   <div class="colors show">
    <ul class="color_ul">
    <li class="li1 checked" id="red">
      
    </li>
    
     <li class="li2" id="black">
      
    </li>
    <li class="li3"  id="green">
      
    </li>
    <li class="li4" id="blue">
      
    </li>
    <li class="li5" id="bluegray">
      
    </li>
    <li class="li6" id="yellow">
      
    </li>
 
  </ul>

  </div>


<!--左右样式-->
 <div  class="position show" >
  <img src="./images/position/left.png"  class="left  pos" id="left">
  <img src="./images/position/right.png" class="right check  pos" id="right">
 </div>
<!--形状-->
 <div class="shape show">
   <img src="./images/shape/rectangle.png" class="rectangle sha" id="rectangle">
   <img src="./images/shape/round.png" class="round  check  sha" id="round">
   <img src="./images/shape/dialog.png" class="dialog sha" id="dialog">
 </div>

</div>








 









<!--something else-->

<div class="menu_show">
  <p class="menu_item setting">设置</p>
  <div class="f_setting_lines menu_line"></div>
  <p class="menu_item user">我的作品</p>
</div>

<div class="calendar_spinner">
  <button class="spinner_item checked " > 封面</button>
  
</div>










</body>
</html>
