<!-- ²âÊÔ $_GET $HTTP_RAW_POST_DATA  -->
<!-- url 
http://localhost/Test/test_http1.php?signature=771f6bd01508e46b02061b0a1330a6ad67e1ad77&timestamp=1364458805&nonce=1364226029 -->
<!-- head
HOST: localhost
Content-Type: text/html
Content-Length: 0
Parama: no-cache
Connection: Keep-Alive -->
<?php

file_put_contents("c:\\AppServ\\tmp.txt", var_export($_GET, true), FILE_APPEND);
file_put_contents("c:\\AppServ\\tmp.txt", "\n", FILE_APPEND);
file_put_contents("c:\\AppServ\\tmp.txt", var_export($HTTP_RAW_POST_DATA, true), FILE_APPEND);
$postXmlStr = $HTTP_RAW_POST_DATA;
$xmlObj = simplexml_load_string($postXmlStr);
// ×¢ÒâÈ«µÈºÅ
if(false === $xmlObj) {
	echo "parse xml string error! \n";
	exit(0);
}
echo "\r\n";
$toUser = $xmlObj->ToUserName;
echo "To User: ". $toUser . "\n";
$fromUser = $xmlObj->FromUserName;
echo "From User: " . $fromUser . "\n";
$createTime = $xmlObj->CreateTime;
echo "Create time: " . $createTime . "\n";
$msgType = $xmlObj->MsgType;
echo "msg type: " . $msgType . "\n";
$content = $xmlObj->Content;
echo "content: " . $content . "\n";
$msgId = $xmlObj->MsgId;
echo "msg id: " . $msgId . "\n";
?>



