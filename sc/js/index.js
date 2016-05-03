$(document).ready(function(){
//默认的数据  如果用户不选的话
var year = "2016年" ;
var mounth = "1月" ;
 var mounth_id = 6;
var type ="2";






//跳转至不同的台历类型
$('.f_create_btn_create').click(function() {
	    	var id = $(this).attr("id");
         self.location.href="./"+id+"/index.php";


	});



//年份
$(".year").change(function(){
  var year_text =$('.year option:selected').text();
  $(".year_text").text(year_text);
   year =year_text ;
});

//月份

$(".mounth").change(function(){
  var mounth_text =$('.mounth option:selected').text();
  $(".mounth_text").text(mounth_text);
   mounth =mounth_text ;
});







//日历样式切换
$('.f_setting_style_g').click(function(){
    
    $(this).addClass('cur');
    $(this).siblings('.f_setting_style_g').removeClass('cur');

});

//返回
$('.f_header_back').click(function(){
   history.back();

});
//下一步

$('.f_header_next').click(function(){
    var calendar = $(this).attr("id");
    type = $('.f_setting_cal').find('.cur').attr('cal-style'); 
    mounth_id =$(".mounth").get(0).selectedIndex;
    //year =parseInt(year);
   self.location.href="../editor.php?cal_type="+calendar+"&year="+year+"&mounth_id="+mounth_id+"&type="+type;
    
    $.ajax({
            type:"POST",
           
            url:"../server/order/new_order.php",
            //提交的数据
            data:{
              "cal_type":calendar,
              "year":year,
              "date_type":type
            },
            //返回数据的格式
            datatype: "html",//"xml", "html", "script", "json", "jsonp", "text".
            //在请求之前调用的函数
                      
            success:function(data){
             //alert("保存成功"); 
             //alert(data);         
            }   ,
            //调用执行后调用的函数
            complete: function(XMLHttpRequest, textStatus){
               
            },
            //调用出错执行的函数
            error: function(){
                //请求出错处理
                alert("保存失败");
            }         
         });

  



});

//menu点击事件   默认是Hidden
/**
$('.menu_show').toggle(
function(){
	
	$('.menu_show').css('display','block');

},
function(){
	$('.menu_show').css('display','none');
});


});
**/


$('.product_more').click(function(){
  
  var o = GetElCoordinate(document.getElementById('line'));
 var menu = document.getElementById('menu');
menu.style.left = parseInt(o.left)+"px";
menu.style.top = parseInt((o.top+o.bottom)/2)+"px";
 $('#menu').toggle();
 $("#users").css("display","none");
});




//显示当前页面 以及选择
$('.img.header_arrow').click(function(){
  
   $('.calendar_spinner').toggle();

});

















//这个function 是获取某一元素的位置
function GetElCoordinate(e)
{
    var t = e.offsetTop;
    var l = e.offsetLeft;
    var w = e.offsetWidth;
    var h = e.offsetHeight;
    while (e = e.offsetParent)
    {
        t += e.offsetTop;
        l += e.offsetLeft;
    }
    return {
        top: t,
        left: l,
        width: w,
        height: h,
        bottom: t + h,
        right: l + w
    }
}




$(".users").on("click",function(){

$("#users").toggle();
$(".menu_show").css("display","none");

});

//创建按钮
$(".create").on("click",function(){
 window.location= "index.php";


});

//删除选项
$(".delete").on("click",function(){


});


$("div.menu_show,div.users"),blur(function(){
   $(this).css("display","none");

});




























});