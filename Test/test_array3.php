<?php
// ��ά����
$arr = array(
	array(1,2,3),
	array(
		"cat" => 10,
		"dog" => 21,
		"sheep" => 46
	)
);

// ����������������һ����
var_dump($arr);
// �����array(2) { [0]=> array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) } [1]=> array(3) { ["cat"]=> int(10) ["dog"]=> int(21) ["sheep"]=> int(46) } }

// var_export($arr);
// �����array ( 0 => array ( 0 => 1, 1 => 2, 2 => 3, ), 1 => array ( 'cat' => 10, 'dog' => 21, 'sheep' => 46, ), )
?>