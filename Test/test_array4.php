<?php
$arr = array (
// 	hello的index自动为0
	'hello',
	'cat' => array('hello', 'world'),
	'dog' => 1,
// 	sheep的index自动为1
	'sheep'
);
echo var_dump($arr);
// 输出为
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

// 小结：没有赋值的元素，自动index从0开始增加，下面测试。
echo "<br>";
echo '<h1>Print two vars which has no default value!</h1>';
echo $arr[0].", ".$arr[1];
?>

