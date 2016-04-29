<?php

include './connect.php';

if ((empty($_POST['name_bank'])) || (empty($_POST['accname'])) || (empty($_POST['accnum'])) || (empty($_POST['branch'])) || (empty($_POST['status_bank']))) {
    echo "<script>alert('ข้อมูลไม่ครบ');history.back();</script>";
    return;
}

$name_bank = $_POST['name_bank'];
$accname = $_POST['accname'];
$accnum = $_POST['accnum'];
$branch = $_POST['branch'];
$status_bank = $_POST['status_bank'];

if ($_POST['status_bank'] != 1) {      //เงื่อนไขสเตตัสต้องไม่เท่ากับหนึ่ง
    echo "<script>alert('สถานะต้องเป็นใช้งานหรือ 1');history.back();</script>";
    return;
}
$sql1 = "SELECT name_bank, accname, accnum, branch, status_bank FROM bank WHERE name_bank = '$name_bank'";
$r1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($r1) > 0) {
    echo "<script>alert('ข้อมูลซ้ำ')</script>";
} else {
    $sql2 = "INSERT INTO bank(name_bank, accname, accnum, branch, status_bank)VALUES('$name_bank', '$accname', '$accnum', '$branch', '$status_bank')";
    $r2 = mysqli_query($conn, $sql2);
    echo "<script>alert('บันทึกสำเร็จ')</script>";
    echo "<meta http-equiv ='refresh'content='0;URL=bank.php'>";
}

// $sql3 = "INSERT INTO tel_mem(id_mem, tel_mem)VALUES('$idMem', '$tel_mem')";
// $r3 = mysqli_query($conn, $sql3);
mysqli_close($conn);
?>