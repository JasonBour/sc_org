 $(document).ready(function(){
  var width = document.documentElement.clientWidth ;
 //var upload =  $('#upload');
 var image_copy = $('#image_copy');
var image  =document.querySelector("#image_copy");
 var cover = $('.cover');           //整个遮罩层
 var  set_image= $('.set_image');   //遮罩层里面的图片容器
 var user_image = document.querySelector('.user_image');  //遮罩层显示的用户图片
var mouth_title = $(".mouth_title");//显示月份的地方
var background= $(".div").find(".background");   //用户图片背后的日历图
var tem_id =0 ;  //现在显示的是月份数组的哪一个
 var mt = document.documentElement.clientHeight -90 ;   //遮罩层下操作按钮的位置
var   container =  $(".image_container") ;
var data ;    //保存用户操作后的html 数据
var height ;
 var scale ; //这个比率是屏幕 宽度/原container
 var  useful_mounth = [];   //用来记录哪些月份被编辑了
var id =0 ;  //这个是模板的id
var container = {};//每个月可能会有多个container 这个装



var   template =$(".templates").find(".check") ; //把templates里面被选中的对象作为全局变量

//很多位置等信息要靠js动态改变  位置动态改变Module
var initViewPosition = new Object ({
       
/*
初始化一些相关的东西
1.计算月份顺序
2.将中间图片位置置于中间位置

*/


      firstInit :function(){
           calculateMouthArray();
           set_image.css({
            "marginTop":(document.documentElement.clientHeight-height)/2,
            "position":"absolute",
            });
               document.getElementById("mounth_icon").src="./images/"+year+"/color/"+shape+"/"+list[tem_id]+"/"+$("li.checked").attr("id")+".png" ;
               $(".pre").css("visibility","hidden");

               //以下三行代码是让中间div_wrapper始终居中(横向和纵向)
                $(".div_wrapper").css("height",$("#background").css("height"));
                 var tmt = parseInt($(".div").css("height"))-parseInt($(".div_wrapper").css("height"));
                $(".div_wrapper").css("marginTop",tmt/2+"px");
                bind_click_for_imageContainer();

      },
     positionChange:function(){} 



                      });






//设置icon和背景图片    非编辑界面的操作module
var div_wrapper_operation = new Object({
      
      setIcon :function(){
         var icon_id =$(".position").find(".check").attr("id");
         document.getElementById("mounth_icon").src= "./images/"+year+"/color/"+shape+"/"+list[tem_id]+"/"+$("li.checked").attr("id")+".png";
         icon_id=="right"? document.getElementById("mounth_icon").style.marginLeft="73%":document.getElementById("mounth_icon").style.marginLeft="10%";

      },

      setImage :function(){
         mouth_title.text(list[tem_id]);
         useful_mounth[tem_id]==1?$(".save_to_order").text("印刷"):$(".save_to_order").text("保存");
         $(".div_wrapper").replaceWith(tem_array[parseInt(template.attr("id"))]);
        if(user_products[tem_id]){
             $(".div_wrapper").replaceWith(user_products[tem_id].content);
            $(".templates").find(".check").removeClass("check");
            $("#"+user_products[tem_id].container).addClass("check");
       }
         bind_click_for_imageContainer();
         document.getElementById("mounth_icon").src= "./images/"+year+"/color/"+shape+"/"+list[tem_id]+"/"+$("li.checked").attr("id")+".png";
      }



});





















getUserData();    
initViewPosition.firstInit();


$(".pre").click(function(){
   image_container_reset();
  $(".nex").css("visibility","visible");
  if(tem_id>0){
    tem_id--;
   div_wrapper_operation.setImage();
  }else{
    $(this).css("visibility","hidden");
  }


});


//next
$(".nex").click(function(){
  image_container_reset();
 $(".pre").css("visibility","visible");
if(tem_id<12){
  tem_id++;
 
   div_wrapper_operation.setImage();
}else{
  $(this).css("visibility","hidden");
}

});






//这个function 是将用户图片的显示区域重置  不管是否保存
function  image_container_reset(){
   $(".div_wrapper").replaceWith(tem_array[parseInt(id)]);
    bind_click_for_imageContainer();
    //setIcon();
    div_wrapper_operation.setIcon();
   //ChooseImageBind();
}






  //颜色icon切换

$(".li1,.li2,.li3,.li4,.li5,.li5,.li6").click(function(){
  $(this).siblings(".checked").removeClass("checked");
  $(this).addClass("checked");
 $(".mounth_icon").attr({
  "src":"./images/"+year+"/color/"+shape+"/"+list[tem_id]+"/"+$(this).attr("id")+".png"
 });

});







//切换模板    模板以js数组的形式保存在standar.js中
$(".tem1,.tem2,.tem3,.tem4,.tem5").click(function(){
  template  = $(this);
  new_($(this));
});

function new_(obj){
 $(".templates").find(".check").removeClass("check");
 obj.addClass("check");
  id = obj.attr("id");

 //$(".div").replaceWith(tem_array[parseInt(id)]);
$(".div_wrapper").replaceWith(tem_array[parseInt(id)]);
  
div_wrapper_operation.setIcon();
 if(user_products[tem_id]&&user_products[tem_id].container==id){
$(".div_wrapper").replaceWith(user_products[tem_id].content);
 }
  bind_click_for_imageContainer();

}






//切换位置      同时将图片icon位置切换一下

$(".left,.right").click(function(){
  $(".position").find(".check").removeClass("check");
   $(this).addClass("check");
      div_wrapper_operation.setIcon();
});

//切换icon样式
$(".rectangle,.round,.dialog").click(function(){
  $(".shape").find(".check").removeClass("check");
$(this).addClass("check");
shape =$(this).attr("id");
document.getElementById("mounth_icon").src= "./images/"+year+"/color/"+shape+"/"+list[tem_id]+"/"+$("li.checked").attr("id")+".png";


});



















//三个container可能会由于模板替换 导致事件监听有问题 所以要重复调用    这个只是我个人担心之前好像有点问题 才分开写的  
function  bind_click_for_imageContainer(){

$(".image_container").on("click",function(){
  jason($(this),$(this).attr("id"));
});
$(".image_container1").on("click",function(){
  jason($(this),$(this).attr("id"));
});
$(".image_container2").on("click",function(){
  jason($(this),$(this).attr("id"));
});

}




//绑定图片区域的编辑
function jason(obj,id){
        if (id=="no1") {      //没添加图片
         upload_obj = obj.find(".upload");
         wechat();
        }else if(id=="no2") {  //添加图片没操作
          scale = width/parseInt(obj.css('width'));
         height = Math.round(scale*parseInt(obj.css('height')));

        var set_image_mt = (document.documentElement.clientHeight-height)/2-52+"px";    //set_image的margin_height  第一个有问题           
         if (height>width) {          
           set_image_mt = "30px";
          
           
           set_image.css({
            "marginLeft":width*0.1+"px",
             "zoom":0.8}); 
         }
         
          set_image.css("marginTop",set_image_mt);
         $(".set_image").find("#image_copy").attr({
            "src":obj.find(".upload").attr("src")
         });
           $(".cover").css("height",mt+53+"px");
          init();
          bind(obj.find(".upload"));
        }else{
          scale = width/parseInt(obj.css('width'));
          height = Math.round(scale*parseInt(obj.css('height')));
          $(".set_image").find("#image_copy").attr({
            "src":obj.find("#image_copy").attr("src")
          });
         init();
         bind(obj.find("#image_copy"));
        }


//只是遮罩层出现之前的一些初始化
function init(){
cover.css("display","block");
$(".jason").css("marginTop",mt+"px");
$(".set_image").css({
    "width":width+"px",
   "height":height+"px"
});
 hammer(document.querySelector("#image_copy"));

}





//调用微信选图片接口
function wechat(){
     wx.chooseImage({
     count: 1,
     sizeType: ['original'],
    success:function(res){
     imageid = res.localIds ;
       obj.find(".upload").attr({
        'src':imageid,
        'width':obj.css('width')
     });
          obj.attr("id","no2");
    },
    fail:function(){
      alert("图片选取失败,请重试");
    }
});
  }





/*
绑定遮罩层的sava按钮
*/
function bind(ob){
$(".save").on("click",function(){
obj.css("background","#FFFFFF");
ob.replaceWith($(".set_image").find("#image_copy")[0].outerHTML);
obj.find("#image_copy").css({
  "zoom":1/scale
});
$(".cover").css("display","none");
obj.attr("id","no3");
$(this).off("click");
useful_mounth[tem_id]=0;
$(".save_to_order").text("保存");
});


}
}



$(".cat-6").on("click",function(){
wx.chooseImage({
     count: 1,
     sizeType: ['original'],
    success:function(res){
     imageid = res.localIds ;
      document.getElementById("image_copy").setAttribute("style","height:auto;width:"+width+"px;");
      document.getElementById("image_copy").setAttribute("src",imageid);

     hammer(document.querySelector("#image_copy"));
    },

    fail:function(){}
});

});


//这个是已经封装好的方法  image对应的是需要绑定动作的对象
function hammer(image){
//   x  y分别代表着坐上角的起点
var START_X = 0 ;
var START_Y = 0;
var ticking = false;
var timer;
var transform ;
var value ;
var mc = new Hammer.Manager(image);
var image_width ;
var image_height ;
var reqAnimationFrame = (function () {
      return window[Hammer.prefixed(window, 'requestAnimationFrame')] || function (callback) {
          window.setTimeout(callback, 1000 / 60);  //设置交互延迟时间
      };
  })();


mc.add(new Hammer.Pan({ threhold: 0 , pointers: 0 }));
//mc.add(new Hammer.Swipe()).recognizeWith(mc.get('pan'));
mc.add(new Hammer.Rotate({ threshold: 0 })).recognizeWith(mc.get('pan'));
mc.add(new Hammer.Pinch({ threshold: 0 })).recognizeWith([mc.get('pan'), mc.get('rotate')]);
//mc.add(new Hammer.Tap({ event: 'doubletap', taps: 2 }));  //双击事件
//mc.add(new Hammer.Tap());

mc.on("panstart panmove", onPan);
mc.on("rotatestart rotatemove", onRotate);
mc.on("pinchstart pinchmove", onPinch);
//mc.on("swipe", onSwipe);
//mc.on("tap", onTap);
//mc.on("doubletap", onDoubleTap);

mc.on("hammer.input",function (ev) {
if (ev.isFinal) {
   transform.angle  = angle(transform.angle);
    requestElementUpdate();
         START_X =transform.translate.x ;
      START_Y =transform.translate.y;

}

});



//按钮一:  图片居中
$(".cat-1").on("click",function(){
var image_copy_tmp = document.getElementById("image_copy") ;
  document.getElementById("image_copy").setAttribute("style","width:auto;height:"+height+"px;");
  init();
  image.className = '';
      transform.translate = {
          x: (width-parseInt($("#image_copy").css("width")))/2,
          y: 0
      };
      transform.scale=1 ;
      START_X = (width-parseInt($("#image_copy").css("width")))/2 ;

      requestElementUpdate();
});



//按钮二 ：图片平铺
$(".cat-2").on("click",function() {
//init();
image.className = '';
      transform.translate = {
          x: 0,
          y: 0
      };
          START_X = START_Y= 0 ;
      transform.scale=1 ;
      requestElementUpdate();
      document.getElementById("image_copy").setAttribute("style","height:auto;width:"+width+"px;marginTop:0px;marginLeft:0px;");

});




//目前感觉是向左旋转90度
$(".cat-3").on("click",function(){
init();
transform.angle=transform.angle-90;
updateElementTransform();
});


$(".cat-4").on("click",function(){   //这两个要放大了才能触发
  init();
   transform.angle=transform.angle+90;
   updateElementTransform();
});


//删除
$(".cat-5").on("click",function(){
// $(".set_image").find("#image_copy").replaceWith('<img src="" id="image_copy"  width="100%" height="auto" >' );
$(".set_image").find("#image_copy").css("display","none");
});





  //这个是角度计算方法
 function angle(argument) {
 var  state ;
  var times ;
  var remainder ;

  if (argument<=0) {
    state =-1;
  }else{
    state=1;
  }
  argument = Math.abs(argument);
  times  = Math.floor( argument/ 90) ;

  remainder = argument %90;

  if(remainder>45){
    times++;
  }
 return times*90*state;

}






   //将数据重置
  function resetElement() {
      image.className = 'animate';
      transform = {
          translate: { x: START_X, y: START_Y },
          scale: 1,
          angle: 0,
          rx: 0,
          ry: 0,
          rz: 0
      };
      requestElementUpdate();
  }

  function updateElementTransform() {

       value = [
                  'scale(' + transform.scale + ', ' + transform.scale + ')',
                  'translate3d(' + transform.translate.x + 'px, ' + transform.translate.y + 'px, 0)',
                  'rotate3d('+ transform.rx +','+ transform.ry +','+ transform.rz +','+  transform.angle + 'deg)'
      ];

      value = value.join(" ");
      //注意  x5不是webkit
      /*
       image_test.style.webkitTransform = value;
      image_test.style.mozTransform = value;
      image_test.style.transform = value;
      **/


     //image.css('-webkit-transform',value);

      image.style.webkitTransform = value;
      image.style.mozTransform = value;
      image.style.transform = value;

      ticking = false;
  }

  function requestElementUpdate() {

      if(!ticking) {
          reqAnimationFrame(updateElementTransform);

          ticking = true;
      }

  }


  function onPan(ev) {

      image.className = '';
      /*
      var im_width = parseInt($("#image_copy").css("width"));
      var im_height = parseInt($("#image_copy").css("height"));
      var x =   (START_X + ev.deltaX)>0?START_X + ev.deltaX:0 ;
      x = (START_X + ev.deltaX)>(width-im_width)?(width-im_width):(START_X + ev.deltaX) ;
      var y = (START_Y + ev.deltaY)>0?START_Y + ev.deltaY:0 ;
         y = (START_Y + ev.deltaY)>(height-im_height)?(height-im_height):(START_Y + ev.deltaY) ;
         **/



         x = START_X + ev.deltaX ;
         y =  START_Y + ev.deltaY ;

image_width = parseInt($("#image_copy").css("width"));
image_height = parseInt($("#image_copy").css("height"));
/**
//这个height
if((image_height<=height)&&(image_width<=image_width)){
   x<=0?x=0:x ;
 x>width-image_width?x= width-image_width:x ;
 y<=0?y=0:y;
 y>=height-image_height?y=height-image_height:y ;

}
else{
x = 0;
y>0?y=0:y ;
y<height-image_height?y=height-image_height: y;
}

**/

      transform.translate = {
          x: x,
          y: y
      };

      requestElementUpdate();

  }

  var initScale = 1;
  function onPinch(ev) {

      if(ev.type == 'pinchstart') {
          initScale = transform.scale || 1;
      }
image_width = parseInt($("#image_copy").css("width"));
image_height = parseInt($("#image_copy").css("height"));

      image.className = '';
      transform.scale = initScale * ev.scale;

      requestElementUpdate();

  }

  var initAngle = 0;
  function onRotate(ev) {

      if(ev.type == 'rotatestart') {
          initAngle = transform.angle || 0;
      }

      image.className = '';
      transform.rz = 1;
      transform.angle = initAngle + ev.rotation;

        image_width = parseInt($("#image_copy").css("width"));
        image_height = parseInt($("#image_copy").css("height"));

      requestElementUpdate();

  }

  function init(){
     image.className = '';
       transform.rz = 1;
       requestElementUpdate();
  }

  function onSwipe(ev) {

      var angle = 50;
      transform.ry = (ev.direction & Hammer.DIRECTION_HORIZONTAL) ? 1 : 0;
      transform.rx = (ev.direction & Hammer.DIRECTION_VERTICAL) ? 1 : 0;
      transform.angle = (ev.direction & (Hammer.DIRECTION_RIGHT | Hammer.DIRECTION_UP)) ? angle : -angle;

      clearTimeout(timer);
      timer = setTimeout(function () {
          resetElement();
      }, 300);
      requestElementUpdate();

  }

  function onTap(ev) {

      transform.rx = 1;
      transform.angle = 25;

      clearTimeout(timer);
      timer = setTimeout(function () {
          resetElement();
      }, 200);
      requestElementUpdate();

  }

  function onDoubleTap(ev) {
      transform.rx = 1;
      transform.angle = 80;

      clearTimeout(timer);
      timer = setTimeout(function () {
          resetElement();
      }, 500);
      requestElementUpdate();

  }


 resetElement();


}



















(function(){
function to_print(){
$(".big_div").toggle();
for (var i = 0; i < 13; i++) {
   if (useful_mounth[i]!=1) {
   $("#m"+i).addClass("color");
   }
}
}

function to_save(){
$(".save_to_order").text("印刷");
useful_mounth[tem_id]=1;
usr.container= $(".templates").find(".check").attr("id");
usr.content =$(".div_wrapper").prop("outerHTML");
user_products[tem_id] = usr;
}


$(".save_to_order").on("click",function(){
useful_mounth[tem_id]==1?to_print():to_save();
});



})()









//这个是提交一般的数据(一到十二月)
/*
id是服务器端用于识别封面还是主内容的
*/


function save_to_order(){
  $.ajax({
            //提交数据的类型 POST GET
            type:"POST",
            //提交的网址
            url:"./server/order/save_to_order.php",
            //提交的数据
            data:{
              "id":1,
              "template":"默认",
              "number":1,
              "content0":data
         },
            //返回数据的格式
            datatype: "html",//"xml", "html", "script", "json", "jsonp", "text".
            //在请求之前调用的函数

            success:function(data){
             alert("保存成功");
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


}






//这个是提交封面
function save_cover_to_order(){
  var  color  = $("li.checked").attr("id");

  $.ajax({
            //提交数据的类型 POST GET
            type:"POST",
            //提交的网址
            url:"./server/order/save_to_order.php",
            //提交的数据
            data:{
              "id":0,
              "main_title":"主标题",
              "sub_title":"副标题",
              "orna_color":color,
              "orna_shape":"圆形",
              "orna_posi":"右边",
              "content":data
            },

            datatype: "html",//"xml", "html", "script", "json", "jsonp", "text".
            //在请求之前调用的函数

            success:function(data){
             alert(decodeURI(data));
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




}

















/*
从服务器获取模板的json 数据   这里是第一个台历的模板数据  以后可能还会有多种
*/
var template_json ;
var user_data ;
function getTemplates(){
  $.ajax({
            //提交数据的类型 POST GET
            type:"POST",
            //提交的网址
            url:"./server/order/getTemplates.php",
            //提交的数据
            data:{
              "get":true
              },
            //返回数据的格式
            datatype: "text",//"xml", "html", "script", "json", "jsonp", "text".
            //在请求之前调用的函数

            success:function(data){
             template_json = data;

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

var obj = eval('(' + template_json + ')');



}

function getUserData(){
  //已有的订单  从服务器中获取   不为空表示是从订单转过来的
 //之后可能需要将订单信息传给服务器才能拿到

  if($_GET["order"]!=null){

  $.ajax({
            //提交数据的类型 POST GET
            type:"POST",
            //提交的网址
            url:"./server/order/getUserData.php",
            //提交的数据

            data:{
              "get":true
              },
            //返回数据的格式
            datatype: "json",//"xml", "html", "script", "json", "jsonp", "text".
            //在请求之前调用的函数

            success:function(data){
             user_data = data;
             alert(data);
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


  }else{
  year = $_GET["year"];
  mounth_id= $_GET['mounth_id'];
  type = $_GET["type"];

  }






}

$(".mouth_title,.header_arrow ").on("click",function() {
   $(".big").find(".color").removeClass("color");
   $(".big").find("#"+tem_id).addClass("color");
    $(".big").toggle();

});


//动态选择月份
$("div#0,div#1,div#2,div#3,div#4,div#5,div#6,div#7,div#8,div#9,div#10,div#11,div#12").on("click",function(){
$(this).siblings(".color").removeClass("color");
$(this).addClass("color");
tem_id = parseInt($(this).attr("id"));
//setImage();
div_wrapper_operation.setImage();
$(this).parent().css("display","none");
});





//印刷 

$("#m0,#m1,#m2,#m3,#m4,#m5,#m6,#m7,#m8,#m9,#m10,#m11,#m12").on("click",function(){
 tem_id = parseInt($(this).attr("data"));
 //setImage();
 div_wrapper_operation.setImage();
 $(this).parent().css("display","none");

});



//这个是提交到订单   要提交好一些数据过去
$(".anyway").on("click",function() {
   window.location="shoppingCar.html";

});










});