<?php
header('Content-Type : text/html; charset=utf-8'); 
include("../condb/conndb.php");

$id_sp = $_POST['id_sp'];
$status_sp = "2";
   

$sql = "UPDATE size_price SET status_sp='$status_sp' WHERE id_sp='$id_sp'";
$query = mysqli_query($conn, $sql) or die($sql);

mysqli_close($conn);
?>
<meta http-equiv ='refresh'content='0;URL=sp_form.php'>