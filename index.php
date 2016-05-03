<?php
header("Content-Type: text/html;charset=utf-8");
$name = $_RESQUEST['title'] ;
$address = $_RESQUEST['detail'] ;
$phone =  $_RESQUEST['book'] ;





//echo  $s= '{"students":[{"name":"android","image":"http://imglf0.ph.126.net/4FEApfRi41Mma2faOliLnw==/1149543804904385610.jpg","content":"没失","detail":"这个是详细内容"}, {"name":"php","image":"http://imglf1.ph.126.net/EVzpip9goxn1P3ClDmwMyA==/2438136248285959588.jpg","content":"没失眠","detail":"这个是详细内容"}, {"name":"adapter","image":"http://imglf1.ph.126.net/Wxehyiy7vt7cuNjg04v4SQ==/6619341474189439456.jpg","content":"没失眠","detail":"这个是详细内容"}, {"name":"inflatin","image":"http://imglf2.ph.126.net/mM_dnDCWSTONYhfy-qyR8Q==/6619510798980117986.jpg","content":"没失眠","detail":"这个是详细内容"}]}';


    //$s= "{\"students\":[{\"name\":\"android\",\"image\":\"http://imglf0.ph.126.net/4FEApfRi41Mma2faOliLnw==/1149543804904385610.jpg\",\"content\":\"没失眠\",\"detail\":\"这个是详细内容\"}, {\"name\":\"php\",\"image\":\"http://imglf1.ph.126.net/EVzpip9goxn1P3ClDmwMyA==/2438136248285959588.jpg\",\"content\":\"没失眠\",\"detail\":\"这个是详细内容\"}, {\"name\":\"adapter\",\"image\":\"http://imglf1.ph.126.net/Wxehyiy7vt7cuNjg04v4SQ==/6619341474189439456.jpg\",\"content\":\"没失眠\",\"detail\":\"这个是详细内容\"}, {\"name\":\"inflating\",\"image\":\"http://imglf2.ph.126.net/mM_dnDCWSTONYhfy-qyR8Q==/6619510798980117986.jpg\",\"content\":\"没失眠\",\"detail\":\"这个是详细内容\"}]}";









//echo $s ='{"newval":[{"Country_code":"101","Country_name":"中国"},{"Country_code":"102","Country_name":"美国"}] }';
/**
$obj = json_decode($s,true);

print_r($obj);

foreach($obj as $key=>$aa){
   echo $key ;
   
    foreach ($aa  as $k => $d){
    
    echo "<br>";
   
    foreach ($d  as $k1 => $d1)
         echo $k1[0] ;
        echo "<br>";
        echo $d1[0] ;
        
        
    }
    
    
}

$array = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

print_r($array);
**/

?>
<a href="http://m.kuaidi100.com" target="_blank">快递查询</a>

<?php  	
                $com="yunda";  	
                $nu="1900171113992"; 	
                $context="查询";  
                $link="<a href='http://www.kuaidi100.com/chaxun?com=".$com."&nu=".$nu."'>".$context."</a >";
                echo $link; 
                ?> 