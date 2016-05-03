
$(document).ready(function(){
//照片编辑器的左边menu

$('.menu').click(function(){
  $('.menu_show').toggle();

});



//创建按钮
$('.create').click(function(){
self.location.href="index.php";


});


//设置按钮
$('.setting').click(function(){
    self.location.href="./calendar_1/index.php";

});


//我的作品按钮
$('.user').click(function(){
  self.location.href="users.php";


});




//遮罩里面的cancel按钮
$('.cancel').click(function(){
  $('.cover').css('display','none');
$(".save").off("click");

});


/*
以下是对应的  模板  颜色 等操作


*/

//切换模板选项   show类表示显示
$("#templates,#colors,#position,#shape").click(function(){
	$(".item_container").find(".img_check").removeClass("img_check");
	$(this).addClass("img_check");
  var id  =$(this).attr("id");
  $(".detail").find(".show").css({
    "display":"none"
  });
 $("."+id).css({
"display":"block"

 });
 
   
});






//印刷的x关闭
$(".close").on("click",function(){
$(".big_div").css("display","none");

});

//切换月份







//印刷层的两个按钮
$(".go_back").on("click",function(){
$(this).parent().css("display","none");

});









});


