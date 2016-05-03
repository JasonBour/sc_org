<?php
$location = array("湖北省","广州","四川");
$i=$_FILES['file']['name'];
file_put_contents($i,$_FILES['file']['tmp_name'] );


?>