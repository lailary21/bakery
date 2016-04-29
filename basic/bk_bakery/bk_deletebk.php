<?php
header('Content-Type : text/html; charset=utf-8'); 
include("../condb/conndb.php");

$id_bakery = $_POST['id_bakery'];
$status_bakery = "2";
   

$sql = "UPDATE bakery SET status_bakery='$status_bakery' WHERE id_bakery='$id_bakery'";
$query = mysqli_query($conn, $sql) or die($sql);

mysqli_close($conn);
?>
<meta http-equiv ='refresh'content='0;URL=bk_form.php'>