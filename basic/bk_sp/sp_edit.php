<?php
include("../condb/conndb.php");

$id_sp = $_POST['id_sp'];
$name_sp  = $_POST['name_sp'];
$size_sp  = $_POST['size_sp'];
$price_sp  = $_POST['price_sp'];

 if((empty($_POST['name_sp'])) || (empty($_POST['size_sp']))|| (empty($_POST['price_sp']))) {
     
         echo "<script>alert('กรุณากรอกข้อมูลให้ครบ');history.back();</script>";
    return;
    }


    $sql = "UPDATE size_price SET name_sp='$name_sp',size_sp='$size_sp',price_sp='$price_sp' WHERE id_sp ='$id_sp'";
    $r1 = mysqli_query($conn,
            $sql);
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";

mysqli_close($conn);
?>
<META HTTP-EQUIV='Refresh' CONTENT = '0;URL=sp_form.php'> 
