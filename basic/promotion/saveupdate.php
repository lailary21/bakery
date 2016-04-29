<?php
require_once("connect.php"); //เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล

$id_pro = $_POST['id_pro'];
$pro_descrip = $_POST['pro_descrip'];
$initial_date_pro = $_POST['initial_date_pro'];
$start_price = $_POST['start_price'];
$end_price = $_POST['end_price'];
$percent = $_POST['percent'];
//-------------------------------------------------------------------------------//

        $sql = "UPDATE promotion SET pro_descrip='$pro_descrip',initial_date_pro='$initial_date_pro',start_price='$start_price',end_price='$end_price',percent='$percent' WHERE id_pro='$id_pro'"; //คำสั่งเแก้ไขข้อมูล
   $r1 = mysqli_query($conn,$sql);
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
    echo "<meta http-equiv='refresh' content='0;url=promotion.php' />";  

mysqli_close($conn);
?>