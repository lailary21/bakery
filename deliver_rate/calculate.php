<?php

include 'connect.php';
$orderno = $_POST['orderno'];
$total1 = $_POST['total1'];
$Total = $total1 + 100;
$sql5 = "UPDATE preorder_bakery SET deliver_price='$Total' WHERE orderno='$orderno'";
$result = mysqli_query($conn,
        $sql5);
echo "<script>alert('ค่าจัดส่ง : $Total บาท ')</script>";
echo "<meta http-equiv='refresh' content='0;url=delivery.php' />";
?>