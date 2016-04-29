<?php
include './connect.php';

$id_owner = $_POST['id_owner'];
$fname_owner = $_POST['fname_owner'];
$lname_owner = $_POST['lname_owner'];
$address_owner = $_POST['address_owner'];
$tel_owner = $_POST['tel_owner'];
$email_owner = $_POST['email_owner'];
$user_owner = $_POST['user_owner'];
$passwd_owner = $_POST['passwd_owner'];
$repass_owner = $_POST['repass_owner'];
$status_owner = $_POST['status_owner'];
//-------------------------------------------------------------------------------//
//$sql2 = "SELECT * FROM member WHERE fname_mem = '$fname_mem'";
//$sql3 = "SELECT * FROM tel_mem WHERE id_mem = '$id_mem'";
if ($passwd_owner != $repass_owner) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('ยืนยันผิดพลาด')
                </SCRIPT>");

    return;
} else {
 //   $r2 = mysqli_query($conn,
   //         $sql2,
     //       $sql3);

    $sql = "UPDATE owner SET fname_owner='$fname_owner',lname_owner='$lname_owner',
            address_owner='$address_owner',user_owner='$user_owner',passwd_owner='$passwd_owner'
            ,status_owner='$status_owner' WHERE id_owner='$id_owner'"; //คำสั่งเแก้ไขข้อมูล
    $r2 = mysqli_query($conn,$sql);
//echo $sql;
    $sql4 = "UPDATE tel_owner SET tel_owner='$tel_owner' WHERE id_owner='$id_owner'";
    $r1 = mysqli_query($conn,$sql4);
    if ($r1 || $r2) {
//    echo $sql;
        echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=own_data.php'>"; //เมื่อแก้ไขข้อมูลเรียบร้อยแล้วสั่งให้ลิงค์ไปตำแหน่งที่เราต้องการ
    } else {
//    echo $sql;
        echo "<script>alert('เกิดข้อผิดพลาดในการแก้ไขข้อมูล');window.history.go(-1);</script>"; //ถ้าไม่สามารถบันทึกข้อมูลได้ให้กลับไปที่หน้าเดิม
    }
}
mysqli_close($conn);
?>