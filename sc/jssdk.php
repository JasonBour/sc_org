<?php


class JSSDK {
  private $appId;
  private $appSecret;
 

  public function __construct($appId, $appSecret) {
	
	
    $this->appId = $appId;
    $this->appSecret = $appSecret;
	
  }
   
  
  public function getSignPackage() {
    $jsapiTicket = $this->getJsApiTicket();
   // echo  $jsapiTicket;
   
    // 注意 URL 一定要动态获取，不能 hardcode.
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $timestamp = time();
    $nonceStr = $this->createNonceStr();
    $time = "&timestamp";
    // 这里参数的顺序要按照 key 值 ASCII 码升序排序
    $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr{$time}=$timestamp&url=$url";

    $signature = sha1($string);

    $signPackage = array(
      "appId"     => $this->appId,
      "nonceStr"  => $nonceStr,
      "timestamp" => $timestamp,
      "url"       => $url,
      "signature" => $signature,
      "rawString" => $string,
      "ticket"  =>$jsapiTicket
    );
	 
    return $signPackage; 
  }

  private function createNonceStr($length = 16) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $str = "";
    for ($i = 0; $i < $length; $i++) {
      $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    }
	
    return $str;
  }

  private function getJsApiTicket() {
    // jsapi_ticket 应该全局存储与更新，以下代码以写入到文件中做示例
    $data = $this->getkvdb("jsapi_ticket");
	$time = $this->getkvdb("jsapi_ticket_expire_time");
  //echo $time ;
  //echo time();
    
        
    if ($time < time()) {

      $accessToken = $this->getAccessToken();
      
      // 如果是企业号用以下 URL 获取 ticket
      // $url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$accessToken";
      $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";
      $res = json_decode($this->httpGet($url));
     // var_dump($res);
      $ticket = $res->ticket;
     
      if ($ticket) {
       $time= time() + 7000;
        $data  = $ticket;
		
	  $this->setkvdb("jsapi_ticket",$data);
		$this->setkvdb("jsapi_ticket_expire_time",$time);
		
        
      }
    } else {
		
      $ticket = $data;
     // echo $ticket;
    }
   
    return $ticket;
  }

  private function getAccessToken() {
    // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
    $data = $this->getkvdb('access_token');
	$time = $this->getkvdb('access_token_expire_time');
     

    if ($time < time()) {
      // 如果是企业号用以下URL获取access_token
      // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";
      $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
      $this->setkvdb("times", $this->getkvdb("times")+1);

      $res = json_decode($this->httpGet($url));
      //var_dump($res);

      $access_token = $res->access_token;
      if ($access_token) {
        $time = time() + 7000;
        $data = $access_token;
        $this->setkvdb('access_token', $data);
		$this->setkvdb('access_token_expire_time',$time);
      }
    } else {
      $access_token = $data;
    }
    return $access_token;
  }

  private function httpGet($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_URL, $url);

    $res = curl_exec($curl);
    curl_close($curl);
   
    return $res;
  }
  

  //下面这几个应该是我写的。。。。
   public function setkvdb($key,$value){
   
      $array =json_decode(file_get_contents("js_ticket.json"),true);
      $array[$key]= $value;
      file_put_contents("js_ticket.json", json_encode($array)); 
	    
     
   }
  
   public  function  getkvdb($key){
     
	   $array =json_decode(file_get_contents("js_ticket.json"),true);
     
	   return $array[$key] ; //就该了$ticket
   }  
  
   public function setDefault(){
   $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
    
      $res = json_decode(file_get_contents($url));
    $url_js = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$res->access_token";
      $res_js = json_decode(file_get_contents($url_js),true);
    

     $value = array(
        'access_token' => $res->access_token,
         'access_token_expire_time'=> time()+$res->expires_in,
         'jsapi_ticket' =>$res_js->ticket,
         'jsapi_ticket_expire_time'=>time()+$res_js->expires_in
        );
     file_put_contents("js_ticket.json", json_encode($value));

   }




}
/**


require_once 'config.php';
require_once 'jssdk.php';
$jssdk = new JSSDK($id,$secrect);
$signPackage = $jssdk->GetSignPackage();

require_once 'config.php';

$jssdk = new JSSDK($id,$secrect);
$jssdk->setDefault();
**/
/**
require_once 'config.php';

$jssdk = new JSSDK($id,$secrect);
$signPackage = $jssdk->GetSignPackage();
var_dump($signPackage);
**/
?>