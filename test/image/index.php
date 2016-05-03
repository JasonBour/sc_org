<!DOCTYPE HTML>

<html>

<head>
	<meta  http-equiv="Content-Type"  content="text/html;  charset=utf-8"  />
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css">
	<script src="http://code.jquery.com/jquery-1.5.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
</head>

<body>

<div data-role="page">

	<div data-role="header">
		<h1>演示PHP上传文件</h1>
	</div><!-- /header -->

	<div data-role="content">
		<form action="" method="post" enctype="multipart/form-data" data-ajax="false">
		<label for="file">文件名称</label>
		<input type="file" name="file" id="file" /> 
		<br />
		<input type="submit" name="submit" value="上传！" />
		</form>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>存到upload文件夹</h4>
	</div><!-- /footer -->

</div><!-- /page -->
</body>

</body>
</html>
<?php
			if ($_FILES["file"]["error"] > 0)
			{
				echo "错误代码: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				echo "文件名称: " . $_FILES["file"]["name"] . "<br />";
				echo "文件类型: " . $_FILES["file"]["type"] . "<br />";
				echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
				echo "临时路径: " . $_FILES["file"]["tmp_name"] . "<br />";
				if (file_exists("upload/" . $_FILES["file"]["name"]))
				{
					echo "该文件已经存在";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
					echo "存储路径: " . "upload/" . $_FILES["file"]["name"];
				}
			}
		?>
		
		
		
		<a href="#myimage">点击查看图片</a>
		<div data-role="page" id="myimage">
	<img src="<?php echo "upload/".$_FILES["file"]["name"]?>"/>
</div><!-- /page -->
