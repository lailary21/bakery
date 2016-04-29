<?php

include './connect.php';
$fname_mem = $_POST['fname_mem'];
$lname_mem = $_POST['lname_mem'];
$sex_mem = $_POST['sex_mem'];
$address_mem = $_POST['address_mem'];
$email_mem = $_POST['email_mem'];
$user_mem = $_POST['user_mem'];
$passwd_mem = $_POST['passwd_mem'];
$repass_mem = $_POST['repass_mem'];
$status_mem = $_POST['status_mem'];
$tel_mem = $_POST['tel_mem'];

if ($passwd_mem != $repass_mem) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('ยืนยันผิดพลาด')
                </SCRIPT>");
    return;
} else {
    $sql2 = "INSERT INTO member(fname_mem, lname_mem, sex_mem, address_mem, email_mem, user_mem, passwd_mem, status_mem)
            VALUES('$fname_mem', '$lname_mem', '$sex_mem', '$address_mem', '$email_mem', '$user_mem', MD5('$passwd_mem'), '$status_mem')";
    $r2 = mysqli_query($conn, $sql2);

    $sql1 = "SELECT * FROM member WHERE user_mem = '$user_mem'";
    $r1 = mysqli_query($conn, $sql1);
    $idMem = "";
    while ($i = mysqli_fetch_array($r1)) {
        $idMem = $i['id_mem'];
    }

    $sql3 = "INSERT INTO tel_mem(id_mem, tel_mem)VALUES('$idMem', '$tel_mem')";
    $r3 = mysqli_query($conn, $sql3);
    echo "<script>alert('บันทึกสำเร็จ')</script>";
    echo "<meta http-equiv ='refresh'content='0;URL=mem_data.php'>";
}

mysqli_close($conn);
?>