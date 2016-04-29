<?php
    $dbhost = "localhost";
    $dbusername = "root"; // ชื่อผู้ใช้งาน database หากทดสอบในเครื่องตัวเองให้ใช้ root 
    $dbpassword = "";
    $dbname = "bakery_online";
    $dbport = "3306";
    
    
    $conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname, $dbport)
            or die("ไม่สามารถติดต่อฐานข้อมูลได้");
    mysqli_set_charset($conn, 'utf8');
    
    if((empty($_POST['name_group'])) || (empty($_POST['status_group']))) {
     
         echo "<script>alert('ข้อมูลไม่ครบ');history.back();</script>";
    return;
    }
   
    $name_group  = $_POST['name_group'];
    $status_group = $_POST['status_group'];     
    
    if($_POST['status_group'] != 1){
        echo "<script>alert('สถานะต้องเป็นใช้งานหรือ1');history.back();</script>";
    return;
    }
    $sql1 = "SELECT name_group,status_group FROM bakery_group WHERE name_group = '$name_group'AND status_group ='$status_group'";
    $r1 = mysqli_query($conn, $sql1);
    
      if (mysqli_num_rows($r1) > 0) {
            echo "<script>alert('ข้อมูลซ้ำ')</script>";	
       }else{    
             
    $sql2 = "INSERT INTO bakery_group(name_group, status_group)VALUES('$name_group','$status_group')";
    $r2 = mysqli_query($conn, $sql2);
            echo "<script>alert('บันทึกสำเร็จ')</script>"; 

       }
       
    mysqli_close($conn);
?>
     <META HTTP-EQUIV='Refresh' CONTENT = '0;URL=group_form.php'> 