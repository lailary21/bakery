<?php

include './connect.php';
$fname_owner = $_POST['fname_owner'];
$lname_owner = $_POST['lname_owner'];
$sex_owner = $_POST['sex_owner'];
$address_owner = $_POST['address_owner'];
$email_owner = $_POST['email_owner'];
$user_owner = $_POST['user_owner'];
$passwd_owner = $_POST['passwd_owner'];
$repass_owner = $_POST['repass_owner'];
$status_owner = $_POST['status_owner'];
$tel_owner = $_POST['tel_owner'];

if ($passwd_owner != $repass_owner) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('ยืนยันผิดพลาด')
                </SCRIPT>");
    return;
} else {
    $sql2 = "INSERT INTO owner(fname_owner, lname_owner, sex_owner, address_owner, email_owner, user_owner, passwd_owner, status_owner)
            VALUES('$fname_owner', '$lname_owner', '$sex_owner', '$address_owner', '$email_owner', '$user_owner', MD5('$passwd_owner'), '$status_owner')";
    $r2 = mysqli_query($conn, $sql2);

    $sql1 = "SELECT * FROM owner WHERE user_owner = '$user_owner'";
    $r1 = mysqli_query($conn, $sql1);
    $idOwn = "";
    while ($i = mysqli_fetch_array($r1)) {
        $idOwn = $i['id_owner'];
    }

    $sql3 = "INSERT INTO tel_owner(id_owner, tel_owner)VALUES('$idOwn', '$tel_owner')";
    $r3 = mysqli_query($conn, $sql3);
    echo "<script>alert('บันทึกสำเร็จ')</script>";
    echo "<meta http-equiv ='refresh'content='0;URL=own_data.php'>";
}

mysqli_close($conn);
?>