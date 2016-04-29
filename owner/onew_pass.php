<?php

$id_owner = trim($_POST['id_owner']);
$user_owner = trim($_POST['user_owner']);
$oldpass_owner = trim($_POST["oldpass_owner"]);
$passwd_owner = trim($_POST["passwd_owner"]);
$repass_owner = trim($_POST["repass_owner"]);
include './connect.php';

$sql = "select user_owner from owner where user_owner='$user_owner' and passwd_owner='$oldpass_owner'";
$result = mysqli_query($conn, $sql);

if ($oldpass_owner == $passwd_owner or $passwd_owner == $repass_owner) {

// 6. save data
    $passwd_owner = MD5($passwd_owner);

    $sql = "update owner set
            passwd_owner='$passwd_owner'
            where user_owner='$user_owner'";
    $result = mysqli_query($conn, $sql);

    echo "<script>
         alert('Update Password');
         </script>";
    echo "<meta http-equiv ='refresh'content='0;URL=../owner/own_data.php'>"; //เมื่อแก้ไขข้อมูลเรียบร้อยแล้วสั่งให้ลิงค์ไปตำแหน่งที่เราต้องการ
} else {
    die("<script>
            alert('Password is not same');
            history.back();
            </script>");
}
?>