<?php
header('Content-Type : text/html; charset=UTF-8');
include("../condb/conndb.php");


$datetime = date('Y-m-d H:i:s'); 
$amount_price = $_POST['amount_price'];
$deliver_price = $_POST['deliver_price'];
$pct = $_POST['pct'];
$status_cancel = $_POST['status_cancel'];
$total = $_POST['total'];
$id_mem = $_POST['bakery_type'];
$id_pro = $_POST['promotion'];
$id_rate = $_POST['deliver_rate'];


            $sql3 = "INSERT INTO preorder_bakery(id_mem,id_pro,id_rate,datetime,amount_price,deliver_price,pct,status_cancel,total)VALUES('$id_mem','$id_pro','$id_rate','$datetime','$amount_price','$deliver_price','$pct','$status_cancel','$total')";
            $r3 = mysqli_query($conn,
                    $sql3);
            echo "<script>alert ('บันทึกรายการเรียบร้อย')</script>";
        

    mysqli_close($conn);
?>