<?php
$arr = array (
// 	hello��index�Զ�Ϊ0
	'hello',
	'cat' => array('hello', 'world'),
	'dog' => 1,
// 	sheep��index�Զ�Ϊ1
	'sheep'
);
echo var_dump($arr);
// ���Ϊ
// array(4) {
// 	[0] = > string(5)"hello"
// 			["cat"] = > array(2) {
// 		[0] = > string(5)
// 		"hello"
// 				[1] = > string(5)
// 				"world"
// 	}
// 	["dog"] = > int(1)
// 	[1] = > string(5)"sheep"
// }

// С�᣺û�и�ֵ��Ԫ�أ��Զ�index��0��ʼ���ӣ�������ԡ�
echo "<br>";
echo '<h1>Print two vars which has no default value!</h1>';
echo $arr[0].", ".$arr[1];
?>

