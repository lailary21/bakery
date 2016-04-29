<?php
header('Content-Type : text/html; charset=utf-8');
include 'connect.php';



$id_pro = $_POST['id_pro'];
$status_pro = "2";

if ($row['status_pro'] == 2) {
    echo "<script>alert('ไม่สามารถแก้ไขได้');history.back();</script>";
} else {
    $sql = "UPDATE promotion SET status_pro='$status_pro' WHERE id_pro=$id_pro ";
    $query = mysqli_query($conn,
            $sql) or die($sql);
    mysqli_close($conn);
}
?>
<meta http-equiv ='refresh'content='0;URL=promotion.php'>