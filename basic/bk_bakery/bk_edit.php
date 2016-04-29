<?php
include("../condb/conndb.php");

$id_bakery = $_POST['id_bakery'];
$id_sp = $_POST['size_price'];


    $sql = "UPDATE bakery SET id_sp='$id_sp' WHERE id_bakery ='$id_bakery'";
    $r1 = mysqli_query($conn,
            $sql);
    
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";

mysqli_close($conn);
?>
<META HTTP-EQUIV='Refresh' CONTENT = '0;URL=bk_form.php'> 
