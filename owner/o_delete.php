<?php
header('Content-Type : text/html; charset=utf-8'); 
include './connect.php';
$sql1 = "SELECT * FROM owner o , tel_owner t WHERE o.id_owner='$id_owner' AND o.id_owner=t.id_owner";

$id_owner = $_POST['id_owner'];
$status_owner = "2";

$sql = "UPDATE owner SET status_owner='$status_owner' WHERE id_owner= '$id_owner' "; //คำสั่งเแก้ไขข้อมูล
$query = mysqli_query($conn, $sql) or die($sql);
mysqli_close($conn);
?>
<meta http-equiv ='refresh'content='0;URL=own_data.php'>