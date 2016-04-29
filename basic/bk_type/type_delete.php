<?php
header('Content-Type : text/html; charset=utf-8'); 
include("../condb/conndb.php");

$id_type = $_POST['id_type'];
$status_type = "2";
   

$sql = "UPDATE bakery_type SET status_type='$status_type' WHERE id_type='$id_type'";
$query = mysqli_query($conn, $sql) or die($sql);

mysqli_close($conn);
?>
<meta http-equiv ='refresh'content='0;URL=type_form.php'>