<?php
if ($_FILES["file"]["error"] > 0)
{
 echo "Error: " . $_FILES["file"]["error"] . "<br />";
}
else
{
 echo "Upload: " . $_FILES["file"]["name"] . "<br />";
 echo "Type: " . $_FILES["file"]["type"] . "<br />";
 echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
 echo "Stored in: " . $_FILES["file"]["tmp_name"];
}
$s =new SaeStorage();
$i=$_FILES['file']['name']; //文件名
$domain='jason'; //storage名
$s->upload( $domain , $i ,$_FILES['file']['tmp_name'] ); //上传
?>
<html>
<body>
<form action="test.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" />
<br />
<input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>