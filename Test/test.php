<?php
// 注释
// ctrl+/
echo "hello world!";
/* 多行注释
ctrl+shift+/
多行注释 */
$a = 5;
echo $a;
echo "<br>";
$b = "this is a string in br tag";
echo $b;
// 双引号包含html标签，输出html元素
echo "<h1>双引号输出值</h1>";
// 双引号，输出值
echo "$a, $b";
echo "<br>";
// 单引号，原样输出
echo "<h1>单引号原样输出</h1>";
echo '$a, $b';

// 连接操作符：.
echo "<br>";
echo "<h1>测试连接操作符</h1>";
echo $a . $b;
echo "<br>";
echo $a . $a;
?>
