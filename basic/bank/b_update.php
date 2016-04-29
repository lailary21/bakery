<?php

include './connect.php';

$id_bank = $_POST['id_bank'];
$name_bank = $_POST['name_bank'];
$accname = $_POST['accname'];
$accnum = $_POST['accnum'];
$branch = $_POST['branch'];

//-------------------------------------------------------------------------------//
if ((empty($_POST['name_bank'])) || (empty($_POST['accname'])) || (empty($_POST['accnum'])) || (empty($_POST['branch']))) {
    echo "<script>alert('ข้อมูลไม่ครบ');history.back();</script>";
    return;
}
$sql2 = "SELECT * FROM bank WHERE name_bank = '$name_bank'";
$r2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($r2) > 0) {
    echo "<script>alert('ข้อมูลซ้ำ');history.back();</script>";
} else {
    $sql = "UPDATE bank SET name_bank='$name_bank',accname='$accname',accnum='$accnum', branch='$branch'WHERE id_bank='$id_bank'"; //คำสั่งเแก้ไขข้อมูล
    $r1 = mysqli_query($conn, $sql);
    if ($r1) {
//    echo $sql;
        echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=bank.php'>"; //เมื่อแก้ไขข้อมูลเรียบร้อยแล้วสั่งให้ลิงค์ไปตำแหน่งที่เราต้องการ
    } else {
//    echo $sql;
        echo "<script>alert('เกิดข้อผิดพลาดในการแก้ไขข้อมูล');window.history.go(-1);</script>"; //ถ้าไม่สามารถบันทึกข้อมูลได้ให้กลับไปที่หน้าเดิม
    }
}
mysqli_close($conn);
?>