wx.config({
  debug: true,   //如果是true 在移动端会将信息alert出来   关闭之后就不会出现 开发期间建议保留
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


//在document ready之前调用的
wx.ready(function() {
  
});


//保存图片id
var images = {
    localId: [],
    serverId: []
  };

//选择图片接口
$('').click();

//预览图片接口

$('').click();

//上传接口
$('').click();


