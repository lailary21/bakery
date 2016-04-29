<?php

$id_mem = trim($_POST['id_mem']);
$user_mem = trim($_POST['user_mem']);
$oldpass_mem = trim($_POST["oldpass_mem"]);
$passwd_mem = trim($_POST["passwd_mem"]);
$repass_mem = trim($_POST["repass_mem"]);
include './connect.php';

$sql = "select user_mem from member where user_mem='$user_mem' and passwd_mem='$oldpass_mem'";
$result = mysqli_query($conn, $sql);

if ($oldpass_mem == $passwd_mem or $passwd_mem == $repass_mem) {

// 6. save data
    $passwd_mem = MD5($passwd_mem);

    $sql = "update member set
            passwd_mem='$passwd_mem'
            where user_mem='$user_mem'";
    $result = mysqli_query($conn, $sql);

    echo "<script>
         alert('Update Password');
         </script>";
    echo "<meta http-equiv ='refresh'content='0;URL=../member/mem_data.php'>"; //เมื่อแก้ไขข้อมูลเรียบร้อยแล้วสั่งให้ลิงค์ไปตำแหน่งที่เราต้องการ
} else {
    die("<script>
            alert('Password is not same');
            history.back();
            </script>");
}
?>