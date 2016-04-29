<?php
header('Content-Type : text/html; charset=utf-8');
include './connect.php';

$id_bank = $_POST['id_bank'];
$status_bank = "2";

$sql = "UPDATE bank SET status_bank='$status_bank' WHERE id_bank= '$id_bank' ";
$query = mysqli_query($conn, $sql) or die($sql);
mysqli_close($conn);
?>
<meta http-equiv ='refresh'content='0;URL=bank.php'>