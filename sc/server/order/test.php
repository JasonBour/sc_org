<?php
$array = json_decode(file_get_contents("../1/1-1448107327.json"),true);



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
echo $array["封面"]["内容"];

?>
</body>
</html>