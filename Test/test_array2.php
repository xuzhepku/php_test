<?php
// ��������

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

// indexΪ0��1,2û�д�ӡ
echo $animal[0].", ".$animal[1].", ".$animal[2];
// indexΪdog��cat��sheep�������ӡ
echo "<br>";
echo $animal['dog'].", ".$animal['cat'].", ".$animal['sheep'];

echo "<br>";
$animal[1] = 45;
$animal[0] = 47;
echo "<h1>���ڿ������indexΪ0��1����</h1>";
echo "<br>";
// ���ڿ��������
echo $animal[0].", ".$animal[1].", ".$animal[2];
?>