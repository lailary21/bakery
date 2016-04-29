<?php
require_once("connect.php"); //เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล

    
    if((empty($_POST['pro_name'])) || (empty($_POST['pro_descrip'])) || (empty($_POST['initial_date_pro'])) || (empty($_POST['start_price'])) || (empty($_POST['end_price'])) || (empty($_POST['percent'])) || (empty($_POST['status_pro']))) {
         echo "<script>alert('ข้อมูลไม่ครบ');history.back();</script>";
    return;    
    }
    
    $pro_name  = $_POST['pro_name'];
    $pro_descrip = $_POST['pro_descrip']; 
    $initial_date_pro  = $_POST['initial_date_pro'];
    $start_price = $_POST['start_price']; 
    $end_price  = $_POST['end_price'];
    $percent = $_POST['percent']; 
    $status_pro = $_POST['status_pro']; 
    
    if($_POST['status_pro'] != 1){      //เงื่อนไขสเตตัสต้องไม่เท่ากับหนึ่ง
        echo "<script>alert('สถานะต้องใช้งาน');history.back();</script>";
         return;
    }
    
    $sql1 = "SELECT pro_name,pro_descrip,initial_date_pro,start_price,end_price,percent,status_pro FROM promotion WHERE pro_name = '$pro_name'";
    $r1 = mysqli_query($conn,$sql1);
    
      if (mysqli_num_rows($r1) > 0) {
            echo "<script>alert('ข้อมูลซ้ำ')</script>";
       }else{    
             
    $sql2 = "INSERT INTO promotion(pro_name,pro_descrip,initial_date_pro,start_price,end_price,percent,status_pro)VALUES('$pro_name','$pro_descrip','$initial_date_pro','$start_price','$end_price','$percent','$status_pro')";
    $r2 = mysqli_query($conn,$sql2);
    //echo $sql2;
           echo "<script>alert('บันทึกสำเร็จ')</script>";     
           echo "<meta http-equiv ='refresh'content='0;URL=promotion.php'>";
        }
    mysqli_close($conn);
?>