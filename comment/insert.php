<?php

require_once("connect.php"); //เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล

date_default_timezone_set('Asia/Bangkok');
$datetime_com = date('Y-m-d H:i:s');
$id_order = $_POST['preorder_detail'];
$orderno = $_POST['preorder_detail'];
$id_bakery = $_POST['preorder_detail'];
$id_sp = $_POST['preorder_detail'];
$id_type = $_POST['preorder_detail'];
$com_text = $_POST['com_text'];

$sql1 = "SELECT com_text FROM comment WHERE com_text = '$com_text'";
$r1 = mysqli_query($conn, $sql1);
$sql2 = "INSERT INTO comment(id_order,orderno,id_bakery,id_sp,id_type,datetime,com_text)VALUES('$id_order','$orderno','$id_bakery','$id_sp','$id_type','$datetime_com','$com_text')";
$r2 = mysqli_query($conn, $sql2);
//echo $sql2;
echo "<script>alert('บันทึกสำเร็จ')</script>";
echo "<meta http-equiv ='refresh'content='0;URL=comment.php'>";

mysqli_close($conn);
?>