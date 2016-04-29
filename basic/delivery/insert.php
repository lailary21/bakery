<?php
require_once("connect.php"); //เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล

    
    if((empty($_POST['name_rate'])) || (empty($_POST['rate_price'])) || (empty($_POST['status_rate']))) {
         echo "<script>alert('ข้อมูลไม่ครบ');history.back();</script>";
    return;    
    }
    
    $name_rate  = $_POST['name_rate'];
    $rate_price = $_POST['rate_price']; 
    $status_rate = $_POST['status_rate']; 
    
    if($_POST['status_rate'] != 1){      //เงื่อนไขสเตตัสต้องไม่เท่ากับหนึ่ง
        echo "<script>alert('สถานะต้องเป็นใช้งานหรือ1');history.back();</script>";
         return;
    }
    
    $sql1 = "SELECT name_rate,rate_price,status_rate FROM deliver_rate WHERE name_rate = '$name_rate'";
    $r1 = mysqli_query($conn,$sql1);
    
      if (mysqli_num_rows($r1) > 0) {
            echo "<script>alert('ข้อมูลซ้ำ')</script>";
       }else{    
             
    $sql2 = "INSERT INTO deliver_rate(name_rate,rate_price,status_rate)VALUES('$name_rate','$rate_price','$status_rate')";
    $r2 = mysqli_query($conn,$sql2);
            echo "<script>alert('บันทึกสำเร็จ')</script>"; 
            echo "<meta http-equiv ='refresh'content='0;URL=delivery.php'>";
        }
    mysqli_close($conn);
?>
