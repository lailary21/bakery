<?php
include("../condb/conndb.php");

$id_type = $_POST['id_type'];
$name_type  = $_POST['name_type'];
$id_group = $_POST['bakery_group']; 

 if((empty($_POST['name_type']))) {
     
         echo "<script>alert('กรุณากรอกชื่อชนิดของเบเกอรี่');history.back();</script>";
    return;
    }

    $sql = "UPDATE bakery_type SET name_type='$name_type',id_group='$id_group' WHERE id_type ='$id_type'";
    $r1 = mysqli_query($conn,
            $sql);
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";

mysqli_close($conn);
?>
       
<META HTTP-EQUIV='Refresh' CONTENT = '0;URL=type_form.php'> 
