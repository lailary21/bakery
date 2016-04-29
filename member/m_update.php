<?php

include './connect.php';

$id_mem = $_POST['id_mem'];
$fname_mem = $_POST['fname_mem'];
$lname_mem = $_POST['lname_mem'];
$address_mem = $_POST['address_mem'];
$tel_mem = $_POST['tel_mem'];
$email_mem = $_POST['email_mem'];
//-------------------------------------------------------------------------------//

$sql = "UPDATE member SET fname_mem='$fname_mem', lname_mem='$lname_mem',
            address_mem='$address_mem', email_mem='$email_mem' WHERE id_mem='$id_mem'"; //คำสั่งเแก้ไขข้อมูล
$r2 = mysqli_query($conn, $sql);

$sql4 = "UPDATE tel_mem SET tel_mem='$tel_mem' WHERE id_mem='$id_mem'";
$r1 = mysqli_query($conn, $sql4);
if ($r1 || $r2) {
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
    echo "<meta http-equiv ='refresh'content='0;URL=mem_data.php'>"; //เมื่อแก้ไขข้อมูลเรียบร้อยแล้วสั่งให้ลิงค์ไปตำแหน่งที่เราต้องการ
} else {
    echo "<script>alert('เกิดข้อผิดพลาดในการแก้ไขข้อมูล');window.history.go(-1);</script>"; //ถ้าไม่สามารถบันทึกข้อมูลได้ให้กลับไปที่หน้าเดิม
}
mysqli_close($conn);
?>