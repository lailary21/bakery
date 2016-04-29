<?php
  include("../condb/conndb.php");
        if((empty($_POST['name_type'])) || (empty($_POST['status_type']))) {
     
         echo "<script>alert('ข้อมูลไม่ครบ');history.back();</script>";
    return;
    }
    
    $name_type  = $_POST['name_type']; 
    $status_type = $_POST['status_type'];     
    $id_group = $_POST['bakery_group']; 
    
    if($_POST['status_type'] != 1){
        echo "<script>alert('สถานะต้องเป็นใช้งานหรือ1');history.back();</script>";
    return;
    }
    
    $sql1 = "SELECT * FROM bakery_type WHERE name_type = '$name_type'AND status_type ='$status_type'";
    $r1 = mysqli_query($conn, $sql1);
    
      if (mysqli_num_rows($r1) > 0) {
            echo "<script>alert('ข้อมูลซ้ำ')</script>";	
       }else{    
     
 $sql3 = "INSERT INTO bakery_type(id_group,name_type,status_type)VALUES('$id_group','$name_type','$status_type')";
 $r3 = mysqli_query($conn, $sql3);
  echo "<script>alert('บันทึกสำเร็จ')</script>";
       }
     
    mysqli_close($conn);
?>
     <META HTTP-EQUIV='Refresh' CONTENT = '0;URL=type_form.php'> 