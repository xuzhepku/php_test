<?php
// �������ݿ�
$conn = mysqli_init();
if(!$conn) {
	echo "mysqli_init error !";
	exit(0);
}
$ret = mysqli_real_connect($conn, "localhost", "root", "84841172", "test2", 3306, test, MYSQLI_CLIENT_FOUND_ROWS);
if(!$ret){
	echo "mysqli_real_connect error !";
	exit(0);
}
// �����¼
$sql = 'insert into test values(1, "tom" )';
$ret = mysqli_query($conn, $sql);
if (!$ret) {
	echo "mysqli_query error !";
	exit(0);
}
// ��ѯ��¼
$sql = 'select * from test';
$ret = mysqli_query($conn, $sql);
// ��ȡ��ѯ���
while (($row = mysqli_fetch_array($ret, MYSQLI_ASSOC)) != NULL) {
	echo "id: " . $row['id'] . "<br>";
	echo "name: " . $row['name'] . "<br>";
}