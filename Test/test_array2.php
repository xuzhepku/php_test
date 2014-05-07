<?php
// 关联数组

$animal = array (
	'dog' => 23,
	'cat' => 26,
	'sheep' => 35,
// 	1 => 45,
// 	0 => 47
);

$ani['dog'] = 23;
$ani['cat'] = 26;
$ani['sheep'] = 35;

// index为0，1,2没有打印
echo $animal[0].", ".$animal[1].", ".$animal[2];
// index为dog，cat，sheep有输出打印
echo "<br>";
echo $animal['dog'].", ".$animal['cat'].", ".$animal['sheep'];

echo "<br>";
$animal[1] = 45;
$animal[0] = 47;
echo "<h1>现在可以输出index为0和1的了</h1>";
echo "<br>";
// 现在可以输出了
echo $animal[0].", ".$animal[1].", ".$animal[2];
?>