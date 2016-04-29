<?php

include './connect.php';

$id_mem = $_POST['id_mem'];
$fname_mem = $_POST['fname_mem'];
$lname_mem = $_POST['lname_mem'];
$address_mem = $_POST['address_mem'];
$tel_mem = $_POST['tel_mem'];
$email_mem = $_POST['email_mem'];
$user_mem = $_POST['user_mem'];
$passwd_mem = $_POST['passwd_mem'];
$repass_mem = $_POST['repass_mem'];
//-------------------------------------------------------------------------------//
if ((empty($_POST['fname_mem'])) || (empty($_POST['lname_mem'])) || (empty($_POST['address_mem'])) || (empty($_POST['tel_mem'])) || (empty($_POST['email_mem'])) || (empty($_POST['user_mem'])) || (empty($_POST['passwd_mem']))) {
    echo "<script>alert('ข้อมูลไม่ครบ');history.back();</script>";
    return;
}
if ($passwd_mem != $repass_mem) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('ยืนยันรหัสผิดพลาด')
                </SCRIPT>");

    return;
} else {
    $sql = "UPDATE member SET fname_mem='$fname_mem', lname_mem='$lname_mem',
            address_mem='$address_mem', email_mem='$email_mem', user_mem='$user_mem', passwd_mem='$passwd_mem' WHERE id_mem='$id_mem'"; //คำสั่งเแก้ไขข้อมูล
    $r2 = mysqli_query($conn, $sql);
    $sql4 = "UPDATE tel_mem SET tel_mem='$tel_mem' WHERE id_mem='$id_mem'";
    $r1 = mysqli_query($conn, $sql4);
    if ($r1 || $r2) {
        echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=mem_data.php'>"; //เมื่อแก้ไขข้อมูลเรียบร้อยแล้วสั่งให้ลิงค์ไปตำแหน่งที่เราต้องการ
    } else {
        echo "<script>alert('เกิดข้อผิดพลาดในการแก้ไขข้อมูล');window.history.go(-1);</script>"; //ถ้าไม่สามารถบันทึกข้อมูลได้ให้กลับไปที่หน้าเดิม
}}
    mysqli_close($conn);
?>