<!-- ���� $_GET $HTTP_RAW_POST_DATA  -->
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

// ���
// array (
// 		'signature' => '771f6bd01508e46b02061b0a1330a6ad67e1ad77',
// 		'timestamp' => '1364458805',
// 		'nonce' => '1364226029',
// )
// '<xml>
// 	<ToUserName><![CDATA[dfhsdjflksdjfsd_klfj]]></ToUserName>
// 	<FromUserName><![CDATA[09weurpejfpdjfpsdjfj]]></FromUserName>
// 	<CreateTime>1364458805</CreateTime>
// 	<MsgType><![CDATA[text]]></MsgType>
// 	<Content><![CDATA[...]]></Content>
// 	<MsgId>586033430984023948</MsgId>
// </xml>'

// ע�⣬ide��ʾ$HTTP_RAW_POST_DATA�������ǳ����ģ�
?>



