<!-- 测试 file_ put_ contents  -->
<!-- php页面中的注释仍然有两种方式 -->
<!-- 选择多行时，每行一个注释符	ctrl+/ -->
<!-- 选择多行时，多行共享一个注释符	ctrl+shift+/ -->
<?php

file_put_contents("c:\\AppServ\\tmp.txt", "start\n", FILE_APPEND);
$arr = array (
// 	hello的index自动为0
	'hello',
	'cat' => array('hello', 'world'),
	'dog' => 1,
// 	sheep的index自动为1
	'sheep'
);
$ret = var_export($arr, true);
// 输出为 array ( 0 => 'hello', 'cat' => array ( 0 => 'hello', 1 => 'world', ), 'dog' => 1, 1 => 'sheep', )
echo '<h1>ret is printed in c:\AppServ\tmp.txt</h1>';

file_put_contents("c:\\AppServ\\tmp.txt", "var_export result: ".$ret."\n", FILE_APPEND);
file_put_contents("c:\\AppServ\\tmp.txt", "end.\n", FILE_APPEND);


// 小结：没有赋值的元素，自动index从0开始增加，下面测试。
echo "<br>";
echo '<h1>Print two vars which has no default value!</h1>';
echo $arr[0].", ".$arr[1];

// 总结：第二个true参数表明了有返回值，否则和var_dump一样，可以直接echo
// 出来
?>

