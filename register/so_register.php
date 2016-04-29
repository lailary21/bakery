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
$tel_owner = $_POST['tel_owner'];
$status_owner = "1";

if (trim($_POST["fname_owner"]) == "") {
    echo "Please input First Name!";
    exit();
}
if (trim($_POST["lname_owner"]) == "") {
    echo "Please input Last Name!";
    exit();
}
if (trim($_POST["sex_owner"]) == "") {
    echo "Please input Sex!";
    exit();
}
if (trim($_POST["address_owner"]) == "") {
    echo "Please input Address!";
    exit();
}
if (trim($_POST["tel_owner"]) == "") {
    echo "Please input Tel!";
    exit();
}
if (trim($_POST["email_owner"]) == "") {
    echo "Please input E-mail!";
    exit();
}
if (trim($_POST["user_owner"]) == "") {
    echo "Please input USername!";
    exit();
}
if (trim($_POST["passwd_owner"]) == "") {
    echo "Please input Password!";
    exit();
}
if ($_POST["passwd_owner"] != $_POST["repass_owner"]) {
    echo "Password not Match!";
    exit();
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
    
    echo "<br>Register Completed!<br>";
    echo "<br> Go to <a href='login_own.php'>Login page</a>";
}
mysqli_close($conn);
?>