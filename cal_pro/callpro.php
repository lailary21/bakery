<?php
//
include 'connect.php';
//session_start();
//if (isset($_SESSION["id_owner"])) {
//    $name = $_SESSION["user_owner"];
//} else {
//    //$name = "guest";
//    echo "<script>alert('กรุณาเข้าสู่ระบบ')</script>";
//    header("location:../register/login_own.php");
//    //$name = $_SESSION["user_owner"];
//    
//}
$orderno = $_POST['orderno'];
$total1 = $_POST['total1'];
$total2 = $_POST['total2'];
$Total = $total1 * $total2;
$Total1 = $Total / 100;
$sql5 = "UPDATE preorder_bakery SET pct='$Total1' WHERE orderno='$orderno'";
$result = mysqli_query($conn,
        $sql5);
echo "<script>alert('ส่วนลดที่ได้รับ : $Total1 บาท ')</script>";
echo "<meta http-equiv='refresh' content='0;url=../deliver_rate/delivery.php' />";
?>