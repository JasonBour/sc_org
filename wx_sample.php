<?php
/**
  * wechat php test
  */

//define your token
define("TOKEN", "weixin");
$wechatObj = new wechatCallbackapiTest();
$wechatObj->responseMsg();

class wechatCallbackapiTest
{
	public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
        	echo $echoStr;
        	exit;
        }
    }

    public function responseMsg()
	
    {
		$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
		if (!empty($postStr)){
              	$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                $fromUsername = $postObj->FromUserName;
                $toUsername = $postObj->ToUserName;
                $keyword = trim($postObj->Content);
                $time = time();
                $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";  


       switch(trim($postObj->MsgType)){
		
		case   "event";{
		if($postObj->Event == "subscribe"){
		   $contentStr="欢迎订阅"; }
		 break;
		  }
		case   "image";{
		$contentStr="你的图片很好";
		 $msgType = "text";
        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
        echo $resultStr;
		}break;
		case   "location";{
            /**
          $newsTpl="<xml>
<ToUserName><![CDATA[toUser]]></ToUserName>
<FromUserName><![CDATA[fromUser]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[news]]></MsgType>
<ArticleCount>1</ArticleCount>
<Articles>
<item>
<Title><![CDATA[导航]]></Title> 
<Description><![CDATA[点击导航]]></Description>
<PicUrl><![CDATA[]]></PicUrl>
<Url><![CDATA[%s]]></Url>
</item>
</Articles>
</xml> ";  
         
        $longtute=$postObj->Location_Y;
        $latitute=$postObj->Location_X;
        $url="http://api.map.baidu.com/direction?origin=latlng:{$latitute},{$longtute}|name:你的位置&desti
nation=latlng:23.378341,116.706653|name:我的位置&mode=driving&region=西安&output=html&src=yourCompanyName|yourAppName";            
            
         $resultStr = sprintf($newsTpl, $fromUsername, $toUsername, $time, $url);
        echo $resultStr;  
            **/
        
            
            
        
		
		$longtute=$postObj->Location_Y;
        $latitute=$postObj->Location_X;
	    $ak="567ed00cbb9f37884e522911a1f749c0";
            $url="http://api.map.baidu.com/telematics/v3/local?location={$longtute},{$latitute}&keyWord=酒店&output=xml&ak={$ak}";
		$apistr=file_get_contents($url);
		$apiObj=simplexml_load_string($apistr);
		$location1=$apiObj->poiList->point[0]->name; //解析出地址
        $location2=$apiObj->poiList->point[1]->name;
            $location3=$apiObj->poiList->point[2]->name; 
             $location4=$apiObj->poiList->point[3]->name; 
             $location5=$apiObj->poiList->point[4]->name; 
		$contentStr="你附近的的宾馆有：".$location1."+".$location2."+".$location3."+".$location4."+".$location5;
	   $msgType = "text";
        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
        echo $resultStr;
  
		}break;
		case   "link";{
		$contentStr="你的链接失效了";
        $msgType = "text";
        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);   
        echo $resultStr; 
		}break;
           
		case   "text";{
		$contentStr="nihao";
		 $msgType = "text";
        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
        echo $resultStr;}break;
		default;
		}     
    }
	}
		
	private function checkSignature()
	{
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];	
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
		sort($tmpArr);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
}





?>