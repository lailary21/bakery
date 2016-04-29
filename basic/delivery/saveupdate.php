<?php
require_once("connect.php"); //เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล

$id_rate = $_POST['id_rate'];
$rate_price = $_POST['rate_price'];
//-------------------------------------------------------------------------------//


if ((empty($_POST['rate_price']))) {
    echo "<script>alert('ข้อมูลไม่ครบ');history.back();</script>";
    return;
}
    $sql = "UPDATE deliver_rate SET rate_price='$rate_price' WHERE id_rate='$id_rate'"; //คำสั่งเแก้ไขข้อมูล
    $r1 = mysqli_query($conn,$sql);
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
    echo "<meta http-equiv='refresh' content='0;url=delivery.php' />";  

mysqli_close($conn);
?>