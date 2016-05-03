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
</head>
<body>

<!--点击图片出现的遮罩层-->
<div class="cover"  style="height: auto;background-color: #000000;" >
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




 <div  class="jason" style="position: absolute;top: 0px;">

  <ul class="ul">

      <li class="cat-1 li">
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
           <span class="mouth_title">封面</span>  <img  id="header_arrow" class="header_arrow " src="./image/nex.png"></span>


             <span class="f_header_btn f_header_next save_to_order">保存</span>
        </div>



<!--编辑器-->


<div class="div" >

<div class="icon icon1 pre">
    <img src="./image/left.png">
  </div>
  <div class="icon icon2 nex">
    <img src="./image/right.png">
  </div>




<div  class="div_wrapper">

<img src="./image/table.png"  id="background" >
  <div class="center_1 image_container" id="no1" >
     <img src="" id="upload" style="position: absolute;" class="upload">
    <!--./image/upload.png-->
  </div>

  <img src=""  class="mounth_icon" id="mounth_icon">



  </div>

  </div>





<!--底部选项-->

 <div class="f_setting_lines"></div>
<div class="item_container">
   <img src="./image/templates.png" id="templates" class="foot_item">
   <img src="./image/colors.png" id="colors" class="foot_item  img_check">
   <img src="./image/bars1.png" id="position" class="foot_item">
   <img src="./image/bars2.png" id="shape" class="foot_item">
</div>

 <div class="f_setting_lines"></div>

<!--具体选项-->
<div class="detail" style="position: relative;bottom: 2px;">

 <!--模板详情-->
 <div class="templates show"  style="position: absolute;">
   <img src="./images/template_1/1.png" class="template check tem1" id="0" data="1">
   <img src="./images/template_1/2.png" class="template  tem2" id="1" data="3">
   <img src="./images/template_1/3.png" class="template  tem3" id="2" data="2">
   <img src="./images/template_1/4.png" class="template tem4" id="3" data="3">
   <img src="./images/template_1/5.png" class="template tem5" id="4" data="1">

 </div>



<!--颜色选择-->
   <div class="colors show" style="position: absolute;">
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
 <div  class="position show"  style="position: absolute;bottom: 3px;">
  <img src="./images/position/left.png"  class="left  pos" id="left">
  <img src="./images/position/right.png" class="right check  pos" id="right">
 </div>
<!--形状-->
 <div class="shape show" style="position: relative;">
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



<!--还有一些其他的-->

<!--月份切换-->
  <div class="big">
   <div class="li_mounth color" id="0">封面</div>
      <div class="li_mounth" id="1">一月</div>
      <div class="li_mounth" id="2">二月</div>
      <div class="li_mounth" id="3">三月</div>
      <div class="li_mounth"  id="4">四月</div>
      <div class="li_mounth" id="5">五月</div>
      <div class="li_mounth" id="6">六月</div>
      <div class="li_mounth" id="7">七月</div>
      <div class="li_mounth" id="8">八月</div>
      <div class="li_mounth" id="9">九月</div>
      <div class="li_mounth" id="10">十月</div>
      <div class="li_mounth" id="11">十一月</div>
      <div class="li_mounth" id="12">十二月</div>
  <!--
      <div class="li_mounth color">封面</div>
      <div class="li_mounth">一月</div>
      <div class="li_mounth">二月</div>
      <div class="li_mounth">三月</div>
      <div class="li_mounth">四月</div>
      <div class="li_mounth">五月</div>
      <div class="li_mounth">六月</div>
      <div class="li_mounth">七月</div>
      <div class="li_mounth">八月</div>
      <div class="li_mounth">九月</div>
      <div class="li_mounth">十月</div>
      <div class="li_mounth">十一月</div>
      <div class="li_mounth">十二月</div>
      -->
    </div>
<!--印刷-->


           <div  class="big_div">
       <div  style="width:100%;height:30px;position: relative;text-align: center;font-size: 16px ;font-weight:bold;  color: #555555;padding-top: 4px;">
       以下月份没有填充，点击添加
        <img src="./image/close.png"  class="close">
</div>


      <div class="li_mounth " data="0" id="m0">封面</div>
      <div class="li_mounth" data="1" id="m1">一月</div>
      <div class="li_mounth" data="2" id="m2">二月</div>
      <div class="li_mounth" data="3" id="m3">三月</div>
      <div class="li_mounth"  data="4" id="m4">四月</div>
      <div class="li_mounth" data="5" id="m5">五月</div>
      <div class="li_mounth" data="6" id="m6">六月</div>
      <div class="li_mounth" data="7" id="m7">七月</div>
      <div class="li_mounth" data="8" id="m8">八月</div>
      <div class="li_mounth" data="9" id="m9">九月</div>
      <div class="li_mounth" data="10" id="m10">十月</div>
      <div class="li_mounth" data="11" id="m11">十一月</div>
      <div class="li_mounth" data="12" id="m12">十二月</div>

      <hr  class="cut_line"/>

       <button class="button_finsish go_back"><span class="txt">返回修改</span></button>
       <button class="button_finsish anyway"><span class="txt">忽略,印刷</span></button>

           </div>












<script type="text/javascript" src="jweixin-1.0.0.js"></script>
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="weixin.js"></script>
<script type="text/javascript" src="./js/editor_standar.js"></script>
<script type="text/javascript" src="./js/hammer.js"></script>
<script type="text/javascript" src="./js/editor.js" ></script>
<script type="text/javascript" src="./js/hammer_wechat.js"></script>
<script type="text/javascript" src="./js/data_to_server.js"></script>

<?php
/**
require_once 'config.php';
require_once 'jssdk.php';
$jssdk = new JSSDK($id,$secrect);
$signPackage = $jssdk->GetSignPackage();
**/
?>

<script type="text/javascript">
/**
wx.config({
  debug: false,   //如果是true 在移动端会将信息alert出来   关闭之后就不会出现 开发期间建议保留
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: '<?php echo $signPackage["timestamp"];?>',
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
          'chooseImage',
          'previewImage',
          'uploadImage',
    ]     //所有需要调用的api
});
 wx.error(function(res){
    alert("错误");

});
*/
</script>

</body>
</html>
