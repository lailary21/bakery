<?php
header('Content-Type : text/html; charset=utf-8'); 
include("../condb/conndb.php");

$id_group = $_POST['id_group'];
$status_group = "2";

$sql = "UPDATE bakery_group SET status_group='$status_group' WHERE id_group='$id_group'";
$query = mysqli_query($conn, $sql) or die($sql);

mysqli_close($conn);
?>
<meta http-equiv ='refresh'content='0;URL=group_form.php'>