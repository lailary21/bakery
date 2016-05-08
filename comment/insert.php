<?php

require_once("connect.php"); //เรียกใช้ไฟล์การเชื่อมต่อ DATABASE SERVER และฐานข้อมูล
//debugArray($_POST);

date_default_timezone_set('Asia/Bangkok');
//$datetime_com = date('Y-m-d H:i:s');
//$id_order = $_POST['preorder_detail'];
//$orderno = $_POST['preorder_detail'];
//$id_bakery = $_POST['preorder_detail'];
//$id_sp = $_POST['preorder_detail'];
//$id_type = $_POST['preorder_detail'];
//$com_text = $_POST['com_text'];

$sql = "INSERT INTO `comment` (`id_order`, `orderno`, `id_bakery`, `id_sp`, `id_type`, `datetime_com`, `com_text`) VALUES ({$_POST['id_order']}, {$_POST['orderno']}, {$_POST['id_bakery']}, {$_POST['id_sp']}, {$_POST['id_type']}, now(), '{$_POST['com_text']}');";
$conn->query($sql) or die($sql);

echo "<script>alert('บันทึกสำเร็จ')</script>";
echo "<meta http-equiv ='refresh'content='0;URL=show_comment.php'>";
exit();
