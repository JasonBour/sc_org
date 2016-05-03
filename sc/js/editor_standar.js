//这个表示每一个月(包括封面是否)是否  代表十三个
var mouth_image_state= new Array(0,0,0,0,0,0,0,0,0,0,0,0,0) ; 
var reallyMouth= new Array(12);   //这个是最后的日历顺序
var list = new Array("封面");   //这个是加上封面后的数组顺序
//标准月份
var mounth_array= new Array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");
//放着对应上面保存的内容  用来用户预览用
var mouth_image_content =  '<img src="./image/upload.png" id="upload" style="position: absolute;" class="upload">';
//微信选择图片后的存放数组
 var imageid;

//模拟php中的get 方法
 var $_GET = (function(){
    var url = window.document.location.href.toString();
    var u = url.split("?");
    if(typeof(u[1]) == "string"){
        u = u[1].split("&");
        var get = {};
        for(var i in u){
            var j = u[i].split("=");
            get[j[0]] = j[1];
        }
        return get;
    } else {
        return {};
    }
})();

//以下是用户的保存信息  每一次点击遮罩层的 保存 就默认保存下来

var user_products = {};
var usr = {};
usr.container="";
usr.content="";



//默认的几个参数值
var year = "2016年" ;
var mounth = "1月" ;
var mounth_id = 0;
var type ="2";
var shape = "round"  ;  //月份icon的形状

//cal_1中的五种模板
var tem_array = new Array(
 '<div  class="div_wrapper"><img src="./image/table.png"  id="background"><div class="center_1 image_container" id="no1" ><img src="" id="upload" style="position: absolute;" class="upload"> </div><img src=""  class="mounth_icon" id="mounth_icon"></div>',
 '<div class="div_wrapper"><img src="./image/table.png"  id="background"><div class="left_2 image_container" id="no1"><img src="" id="upload" style="position: absolute;" class="upload"></div><div class="right-top_2 image_container1" id="no1"><img src="" id="upload" style="position: absolute;" class="upload"></div><div class="right_2 image_container2" id="no1"><img src="" style="position: absolute;" class="upload"></div><img src=""  class="mounth_icon" id="mounth_icon"></div>',
 '<div class="div_wrapper "><img src="./image/table.png"  id="background"><div class="left_3 image_container" id="no1"><img src="" id="upload" style="position: absolute;" class="upload"></div><div class="right_3 image_container1" id="no1"><img src="" id="upload" style="position: absolute;" class="upload"></div><img src=""  class="mounth_icon" id="mounth_icon"></div>',
 '<div class="div_wrapper"><img src="./image/table.png"  id="background"><div class="left_4 image_container" id="no1"><img src="" id="upload" style="position: absolute;" class="upload"></div><div class="mid_4 image_container1" id="no1"><img src="" id="upload" style="position: absolute;" class="upload"></div><div class="right_4 image_container2" id="no1"><img src="" id="upload" style="position: absolute;" class="upload"></div><img src=""  class="mounth_icon" id="mounth_icon"></div>',
 '<div class="div_wrapper"><img src="./image/table.png"  id="background"><div class="left_5 image_container" id="no1"><img src="" id="upload" style="position: absolute;" class="upload"></div><img src=""  class="mounth_icon" id="mounth_icon"></div>'
);
/**
var tem_array = new Array(
 '<div  class="div_wrapper"><img src="./image/table.png"  id="background"><div class="center_1 image_container" id="no1" ><img src="./image/upload.png" id="upload" style="position: absolute;" class="upload"> </div><img src=""  class="mounth_icon" id="mounth_icon"></div>',
 '<div class="div_wrapper"><img src="./image/table.png"  id="background"><div class="left_2 image_container" id="no1"><img src="./image/upload.png" id="upload" style="position: absolute;" class="upload"></div><div class="right-top_2 image_container1" id="no1"><img src="./image/upload.png" id="upload" style="position: absolute;" class="upload"></div><div class="right_2 image_container2" id="no1"><img src="./image/upload.png" style="position: absolute;" class="upload"></div><img src=""  class="mounth_icon" id="mounth_icon"></div>',
 '<div class="div_wrapper "><img src="./image/table.png"  id="background"><div class="left_3 image_container" id="no1"><img src="./image/upload.png" id="upload" style="position: absolute;" class="upload"></div><div class="right_3 image_container1" id="no1"><img src="./image/upload.png" id="upload" style="position: absolute;" class="upload"></div><img src=""  class="mounth_icon" id="mounth_icon"></div>',
 '<div class="div_wrapper"><img src="./image/table.png"  id="background"><div class="left_4 image_container" id="no1"><img src="./image/upload.png" id="upload" style="position: absolute;" class="upload"></div><div class="mid_4 image_container1" id="no1"><img src="./image/upload.png" id="upload" style="position: absolute;" class="upload"></div><div class="right_4 image_container2" id="no1"><img src="./image/upload.png" id="upload" style="position: absolute;" class="upload"></div><img src=""  class="mounth_icon" id="mounth_icon"></div>',
 '<div class="div_wrapper"><img src="./image/table.png"  id="background"><div class="left_5 image_container" id="no1"><img src="./image/upload.png" id="upload" style="position: absolute;" class="upload"></div><img src=""  class="mounth_icon" id="mounth_icon"></div>'
);
**/














//将日历顺序转换

function calculateMouthArray(){   
list =  list.concat(mounth_array.slice(mounth_id).concat(mounth_array.slice(0,mounth_id)));
}

