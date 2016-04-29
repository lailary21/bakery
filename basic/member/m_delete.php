<?php
header('Content-Type : text/html; charset=utf-8');
include './connect.php';
$sql1 = "SELECT * FROM member m , tel_mem t WHERE m.id_mem='$id_mem' AND m.id_mem=t.id_mem";

$id_mem = $_POST['id_mem'];
$status_mem = "2";

$sql = "UPDATE member SET status_mem='$status_mem' WHERE id_mem= '$id_mem' "; //คำสั่งเแก้ไขข้อมูล
$query = mysqli_query($conn, $sql) or die($sql);
mysqli_close($conn);
?>
<meta http-equiv ='refresh'content='0;URL=mem_data.php'>
