$(document).ready(function(){



//最好是从服务器获取一个价格表
var print = 6 ;   //默认的印刷
var num = 1;  //默认的数量
var address = $(".address");

var new_address_container = $(".new_address_container");
//点击选择收获信息
callback();
 setup();preselect('湖北省');

$(".add_new_address").bind("click",function(){
address.slideDown("slow");
$(this).css({
"visibility":"hidden"
});  


  


});



var json_str = {};
json_str.address0= "地址1：武汉轻工大学东西湖校区唐道源132071666553";
json_str.address1 ="东西湖区";

//添加收货信息  这个到时候用for循环一下  还要有一个初始的地址

$(".user_info").append("<option class='user_info_option' id='0'>"+json_str.address0.substr(0,10)+"</option>");
$(".user_info").append("<option class='user_info_option' id='1' >"+json_str.address1+"</option>");

$(".user_info").change(function(){
$(".user_info_content").text(json_str["address"+$(".user_info").find("option:selected").attr("id")]);

});






//这里上传服务器
$(".confirm").click(function(){

address.slideUp("slow");

$(".add_new_address").css({
	"visibility":"visible"
});
});





//取消添加收货地址
$(".cancel").click(function(){
 address.slideUp("slow");
$(".add_new_address").css({
	"visibility":"visible"
});



});


/*
各种样式的选择


*/
//装订的样式选择    要不要加border 之后再说
$(".book-bind-span").click(function(){
	$(".book-bind-img").css("display","block");

});

//印刷样式的选择
$(".book-print-4").click(function(){
  $("#book-print-6").css("display","none");	
  $("#book-print-4").css("display","block");
   print = 4;
});
$(".book-print-6").click(function(){

	$("#book-print-4").css("display","none");
	$("#book-print-6").css("display","block");	
	print  = 6 ;
});
$(".book-paper-span").click(function(){
	$("#book-paper-span").css("display","block");
});






//删除选项
$(".delete-btn").on("click",function(){
 


});




//点击使用优惠券的点击事件
$(".coupons_click").click(function(){
 $("#mask,#mask-rule").css({
 	"display":"block"
 });
 $("#coupons").css("display","block");


});

//优惠券遮罩内的一系列动作事件

//取消
$(".coupons-no").click(function(){
   $("#mask,#mask-rule").css(
 	"display","none"
 );
 $("#coupons").css("display","none");


});





/*
数量的操作
*/
//减少数量

$(".reduce-count").click(function(){
  num>1?num--:num;  
callback();
 
});
//增加数量
$(".add-count").click(function(){
  num++;
 callback();
});


function callback(){
	$(".work-count").text(num);
	$("strong").text(num*3);
	
}






/*
 提交订单
*/

$(".add_order").click(function(){
	
});



//动态获取用户的收货地址   还是以json形式比较好
function getUser_info(){
  //1.获取json文件
  //2.解析并且插入

 

}













});