<?php
include 'server.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>λ��</title>
<meta charset="gb2312">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script src="js/jquery.min.js" charset="gb2312"></script>
    
    <script src="../wechat/js/bootstrap.min.js"></script>
    <script src="../wechat/js/bootstrap-select.js"></script>
<script type="text/javascript" src=""></script>
<link rel="stylesheet" type="text/css" href="../wechat/css/bootstrap-select.css">
<link rel="stylesheet" type="text/css" href="../wechat/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../wechat/css/location.css">
<script type="text/javascript" src="../wechat/js/geo.js"></script>
<script type="text/javascript">
	function  hi(){
		/* ����ֻ�ǽ���Ϣ��ʾ����   ����Ϣ����ʽ����save������
		*/

      style="display: none;" 	 
    document.getElementById('hi').style.display="";

    setup();preselect('����ʡ');promptinfo();
}


 function save(){
 	/*  ��λ����Ϣ�����жϴ���
 	*/
          //   alert(document.getElementById('address').value); 
      
       style="display:none;";
       document.getElementById('hi').style.display="none";
       return false;
             
 

 }

 function init(){

 style="display:none;";
       document.getElementById('hi').style.display="none";

 }



function promptinfo()
{
	var address = document.getElementById('address');
	var s1 = document.getElementById('s1');
	var s2 = document.getElementById('s2');
	var s3 = document.getElementById('s3');
	address.value = s1.value + s2.value + s3.value;
}




</script>
</head>


<body onload="init()">

	
    <div class="container-fluid  container"  id="hi"   >
        <form name="shareip" action="#" method="post" class="form-horizontal  " >
        	<div class="form-group ">
        		<label for="inputEmail3" class="col-sm-2 control-label">ʡ����</label>
			<select class="select form-control" name="province" id="s1">
			  <option></option>
			</select>
		</div>
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">�м���</label>
			<select class="select form-control" name="city" id="s2">
			  <option></option>
			</select>
		</div>
		<div class="form-group">
			<label for="s3" class="col-sm-2 control-label" >������</label>
			<select class="select form-control" name="town" id="s3">
			  <option></option>
			</select>
		</div>

		<div class="form-group " >
    <label class="col-sm-2 control-label"  >����λ��</label>
    <br>
    
      <textarea class="form-control" rows="3"></textarea>
    
  </div>


			<input id="address" name="address" type="hidden" value="" />
		  <input  type="submit" value="�ύ"  class="btn btn-primary btn-lg btn-block "  onclick="save()" />
		  <br/>
		
        </form>
		
		</div>


 <div class="container span7 text-center">
<button type="button" class="btn btn-info "  onclick="hi()">�����λ��</button>



<form role="form">
<div class="form-group "  >
	<label for="name">ѡ���б�	</label>
  <select class="form-control">
  
  
  <?php
   
    for($i=0;$i<count($location);$i++){
		echo "<option>λ��{$i}:{$location($i)}</option>";
	}
  
  ?>
  	
  </select>

</div>	

</form>



<?php
 echo count($location);
 ?>
</div>


</body>
</html>