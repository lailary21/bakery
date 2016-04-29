<?php
include("../condb/conndb.php");

$id_group = $_POST['id_group'];
$name_group = $_POST['name_group'];

if ((empty($_POST['name_group']))) {

    echo "<script>alert('กรุณาใส่ชื่อกลุ่มเบเกอรี่');history.back();</script>";
    return;
}

    $sql = "UPDATE bakery_group SET name_group='$name_group' WHERE id_group ='$id_group'";
    $r1 = mysqli_query($conn,
            $sql);
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";

mysqli_close($conn);
?>
<META HTTP-EQUIV='Refresh' CONTENT = '0;URL=group_form.php'> 
