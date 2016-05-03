<?php
header("Content-type:image/png");
//$img = imagecreatetruecolor(1000,1000);
$im = imagecreatefromjpeg("./1441521917451.jpg");
$im2 = imagecreatefromjpeg("./jason.jpg");
imagealphablending($im, 1);
imagealphablending($im2, 1);

imagecopy($im, $im2, 0,0,0,0,225,143);
//$rota =imagerotate($im,50,imageColorAllocateAlpha($im, 0, 0, 0, 127));
imagepng($im);  //将图片输出到浏览器
imagedestroy($im);

/**
$filename = '1441521917451.jpg';
$percent = 0.2;
// 指定头文件Content typezhi值
header('Content-type: image/jpeg');
// 获取图片的宽高
list($width, $height) = getimagesize($filename);
$newwidth = $width * $percent;
$newheight = $height * $percent;
// 创建一个图片。接收参数分别为宽高，返回生成的资源句柄
$thumb = imagecreatetruecolor($newwidth, $newheight);
//获取源文件资源句柄。接收参数为图片路径，返回句柄
$source = imagecreatefromjpeg($filename);
// 将源文件剪切全部域并缩小放到目标图片上。前两个为资源句柄
imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
// 输出给浏览器
imagejpeg($thumb);

//这个缩放最后也会导致有问题
/**
use Imagine\Image\Box;
use Imagine\Image\Point;
require 'C:/Users/Administrator/vendor/autoload.php';
$imagine = new Imagine\Gd\Imagine();
// or
//$imagine = new Imagine\Imagick\Imagine();
// or
//$imagine = new Imagine\Gmagick\Imagine();
 
$size    = new Imagine\Image\Box(40, 40);
 
$mode    = Imagine\Image\ImageInterface::THUMBNAIL_INSET;
// or
$mode    = Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;
 
$imagine->open('jason.jpg')
    //->thumbnail($size, $mode)
	->resize(new Box(615, 925))
   //->rotate(45)
    ->save('thumbnail.png')
;

**/

?>