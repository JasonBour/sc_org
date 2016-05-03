<!DOCTYPE html>
<!-- saved from url=(0044)http://www.54575.com/mobile/html5/alloy.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<title>HTML5图片特效</title>
<script language="javascript" src="./HTML5图片特效_files/jquery-1.8.1.min.js"></script>
<script language="javascript" src="./HTML5图片特效_files/alloyimage.js"></script>
<style>
/* reset */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
/* reset End */
div {
	margin: 0 auto;
	text-align: center;
}
#artwork {
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	overflow: hidden;
	margin: 50px auto 10px;
}
input {
	width: 80px;
	height: 30px;
	line-height: 30px;
	font-size: 14px;
	font-family: '微软雅黑';
	border: 1px solid #ccc;
	background-color: #e3e3e3;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	display: inline-block;
	margin: 10px;
	color: #333;
	text-align: center;
	cursor: pointer;
}
input:hover {
	border: 1px solid #777;
	background-color:#999;
	color:#fff;
}
#loading {
	position: fixed;
	top: 50%;
	left: 50%;
	width: 100px;
	height: 80px;
	background-color:#aaa;
	border: 1px solid #ccc;
	background-repeat: no-repeat;
	background-position: center center;
	display: block;
	z-index:9999;
	margin-left: -50px;
	margin-top: -96px;
	-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.8); -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.8); box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	line-height: 80px;
	font-size: 16px;
	font-family: '微软雅黑';
	text-align: center;
	color: #333;
	filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8;
	display: none;
}
	
</style>
</head>

<body>
<h3>点击钮之后如果图片没有变化 请稍等几秒 或者尝试再次点击按钮  手机处理速度不如电脑 见谅</h3>
<h3>安卓手机出现连续点击按钮图片消失的情况 可以尝试点击原图 恢复</h3>


<div>
<img src="./HTML5图片特效_files/jasonbourne.jpg" data="./HTML5图片特效_files/jasonbourne.jpg" id="artwork" width="340" height="auto">
</div>
<div>
	<p>
	<input type="button" value="原图" id="normal">
	<input type="button" value="灰度" id="toGray">
	<input type="button" value="反色" id="toReverse">
	<input type="button" value="高斯" id="gaussBlur">
	<input type="button" value="马赛克" id="mosaic">
	</p><p>
	<input type="button" value="浮雕" id="embossment">
	<input type="button" value="四周暗角" id="darkCorner">
	<input type="button" value="白点" id="dotted">
	<input type="button" value="杂色" id="noise">
	<input type="button" value="腐蚀" id="corrode">
	</p>
	<p>
	<input type="button" value="锐化" id="sharp">
	<input type="button" value="亮度" id="brightness">
	<input type="button" value="饱和度调节" id="setHSI">
	<input type="button" value="曲线" id="curve">
	<input type="button" value="灰度阈值" id="toThresh">
	</p>
	<p>
	<input type="button" value="美肤" id="softenFace">
	<input type="button" value="素描" id="sketch">
	<input type="button" value="自然增强" id="softEnhancement">
	<input type="button" value="紫调" id="purpleStyle">
	<input type="button" value="柔焦" id="soften">
	
	</p>
    <p>
	<input type="button" value="复古" id="vintage">
	<input type="button" value="黑白" id="gray">
	<input type="button" value="仿lomo" id="lomo">
	<input type="button" value="亮白增强" id="strongEnhancement">
	<input type="button" value="灰白" id="strongGray">
	</p>
	
	<p>
	<input type="button" value="灰色" id="lightGray">
	<input  type="button" value="暖秋" id="warmAutumn">
	<input type="button" value="木雕" id="carveStyle">
	<input type="button" value="粗糙" id="rough">

 	</p>
	</div>
<script language="javascript">
$('#normal').click(function(){
	var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
});
$('#toGray').click(function(){
	var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	var picTranseObj = AlloyImage(pic);
	picTranseObj.act('toGray').replace(pic);
});
$('#toReverse').click(function(){
	var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	var picTranseObj = AlloyImage(pic);
	picTranseObj.act('toReverse').replace(pic);
});
$('#gaussBlur').click(function(){
	var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	var picTranseObj = AlloyImage(pic);
	picTranseObj.act('gaussBlur', 5).replace(pic);
});
$('#embossment').click(function(){
	var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	
	var picTranseObj = AlloyImage(pic);
	picTranseObj.act('embossment').replace(pic);
});
$('#mosaic').click(function(){
	var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	var picTranseObj = AlloyImage(pic);
	picTranseObj.act('mosaic',3).replace(pic);
});
$('#darkCorner').click(function(){
	var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	var picTranseObj = AlloyImage(pic);
	picTranseObj.act('darkCorner',10,255).replace(pic);
});
$('#dotted').click(function(){
	var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	var picTranseObj = AlloyImage(pic);
	picTranseObj.act('dotted').replace(pic);
});
$('#noise').click(function(){
	var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	var picTranseObj = AlloyImage(pic);
	picTranseObj.act('noise', 32).replace(pic);
});
$('#corrode').click(function(){
	var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	var picTranseObj = AlloyImage(pic);
	picTranseObj.act('corrode').replace(pic);
});
$('#sharp').click(function(){
   var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	var picTranseObj = AlloyImage(pic);
	picTranseObj.act("sharp",10).replace(pic);

});
$('#brightness').click(function(){
   var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	var picTranseObj = AlloyImage(pic);
	picTranseObj.act("brightness",20,20).replace(pic);

});
$('#toThresh').click(function(){
   var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	var picTranseObj = AlloyImage(pic);
	picTranseObj.act("toThresh",128).replace(pic);

});
$('#curve').click(function(){
   var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	var picTranseObj = AlloyImage(pic);
	picTranseObj.act("curve",[0,65,128,255], [0,120,220,255]).replace(pic);

});
$('#setHSI').click(function(){
   var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	var picTranseObj = AlloyImage(pic);
	picTranseObj.act("setHSI",10,0,10,true).replace(pic);

});
$('#sketch').click(function(){
var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	pic.loadOnce(function(){
	var picTranseObj = AlloyImage(pic);
	picTranseObj.ps('sketch').replace(pic);
	});
});
$('#softEnhancement').click(function(){
var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	pic.loadOnce(function(){
	var picTranseObj = AlloyImage(pic);
	picTranseObj.ps('softEnhancement').replace(pic);
	});
});
$('#purpleStyle').click(function(){
var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	pic.loadOnce(function(){
	var picTranseObj = AlloyImage(pic);
	picTranseObj.ps('purpleStyle').replace(pic);
	});
});
$('#soften').click(function(){
var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	pic.loadOnce(function(){
	var picTranseObj = AlloyImage(pic);
	picTranseObj.ps('soften').replace(pic);
	});
});
$('#vintage').click(function(){
var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	pic.loadOnce(function(){
	var picTranseObj = AlloyImage(pic);
	picTranseObj.ps('vintage').replace(pic);
	});
});
$('#gray').click(function(){
var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	pic.loadOnce(function(){
	var picTranseObj = AlloyImage(pic);
	picTranseObj.ps('gray').replace(pic);
	});
});
$('#lomo').click(function(){
var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	pic.loadOnce(function(){
	var picTranseObj = AlloyImage(pic);
	picTranseObj.ps('lomo').replace(pic);
	});
});
$('#strongEnhancement').click(function(){
var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	pic.loadOnce(function(){
	var picTranseObj = AlloyImage(pic);
	picTranseObj.ps('strongEnhancement').replace(pic);
	});
});
$('#strongGray').click(function(){
var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	pic.loadOnce(function(){
	var picTranseObj = AlloyImage(pic);
	picTranseObj.ps('strongGray').replace(pic);
	});
});
$('#lightGray').click(function(){
var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	pic.loadOnce(function(){
	var picTranseObj = AlloyImage(pic);
	picTranseObj.ps('lightGray').replace(pic);
	});
});
$('#warmAutumn').click(function(){
var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	pic.loadOnce(function(){
	var picTranseObj = AlloyImage(pic);
	picTranseObj.ps('warmAutumn').replace(pic);
	});
});
$('#carveStyle').click(function(){
var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	pic.loadOnce(function(){
	var picTranseObj = AlloyImage(pic);
	picTranseObj.ps('carveStyle').replace(pic);
	});
});
$('#rough').click(function(){
var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	pic.loadOnce(function(){
	var picTranseObj = AlloyImage(pic);
	picTranseObj.ps('rough').replace(pic);
	});
});
$('#softenFace').click(function(){
var pic = $('#artwork')[0];
	pic.src = $('#artwork').attr('data');
	pic.loadOnce(function(){
	var picTranseObj = AlloyImage(pic);
	picTranseObj.ps('softenFace').replace(pic);
	});
});




</script>
<div id="loading">处理中</div>

</body></html>