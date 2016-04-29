<?php
    include("../condb/conndb.php");
    
    
     if((empty($_POST['name_sp'])) || (empty($_POST['size_sp']))|| (empty($_POST['price_sp']))|| (empty($_POST['status_sp']))|| (empty($_POST['size_sp1']))) {
     
         echo "<script>alert('ข้อมูลไม่ครบ');history.back();</script>";
    return;
    }
    $name_sp  = $_POST['name_sp'];
    $size_sp  = $_POST['size_sp'];
    $price_sp  = $_POST['price_sp'];
    $status_sp  = $_POST['status_sp'];
   $size_sp1 = $_POST['size_sp1'];
    $sum =   $size_sp."".$size_sp1 ;
    //echo $sum;    
   
    if($_POST['status_sp'] != 1){
        echo "<script>alert('สถานะต้องเป็นใช้งานหรือ1');history.back();</script>";
    return;
    }
      
    $sql2 = "INSERT INTO size_price(name_sp, size_sp, price_sp, status_sp)VALUES('$name_sp','$sum', '$price_sp', '$status_sp')";
     //echo $sql2;
    $resultsp2 = mysqli_query($conn, $sql2);
         echo "<script>alert('บันทึกสำเร็จ')</script>"; 
       
    mysqli_close($conn);
?>
  <META HTTP-EQUIV='Refresh' CONTENT = '0;URL=sp_form.php'>