<!-- ���� file_ put_ contents  -->
<!-- phpҳ���е�ע����Ȼ�����ַ�ʽ -->
<!-- ѡ�����ʱ��ÿ��һ��ע�ͷ�	ctrl+/ -->
<!-- ѡ�����ʱ�����й���һ��ע�ͷ�	ctrl+shift+/ -->
<?php

file_put_contents("c:\\AppServ\\tmp.txt", "start\n", FILE_APPEND);
$arr = array (
// 	hello��index�Զ�Ϊ0
	'hello',
	'cat' => array('hello', 'world'),
	'dog' => 1,
// 	sheep��index�Զ�Ϊ1
	'sheep'
);
$ret = var_export($arr, true);
// ���Ϊ array ( 0 => 'hello', 'cat' => array ( 0 => 'hello', 1 => 'world', ), 'dog' => 1, 1 => 'sheep', )
echo '<h1>ret is printed in c:\AppServ\tmp.txt</h1>';

file_put_contents("c:\\AppServ\\tmp.txt", "var_export result: ".$ret."\n", FILE_APPEND);
file_put_contents("c:\\AppServ\\tmp.txt", "end.\n", FILE_APPEND);


// С�᣺û�и�ֵ��Ԫ�أ��Զ�index��0��ʼ���ӣ�������ԡ�
echo "<br>";
echo '<h1>Print two vars which has no default value!</h1>';
echo $arr[0].", ".$arr[1];

// �ܽ᣺�ڶ���true�����������з���ֵ�������var_dumpһ��������ֱ��echo
// ����
?>

