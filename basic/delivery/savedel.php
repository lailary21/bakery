
<?php
header('Content-Type : text/html; charset=utf-8'); 
include 'connect.php';



$id_rate = $_POST['id_rate'];
$status_rate = "2";

$sql = "UPDATE deliver_rate SET status_rate='$status_rate' WHERE id_rate=$id_rate ";
$query = mysqli_query($conn, $sql) or die($sql);
mysqli_close($conn);
?>
<meta http-equiv ='refresh'content='0;URL=delivery.php'>