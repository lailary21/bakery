<?php 
        $dbhost = "localhost";
        $dbusername = "root"; // ชื่อผู้ใช้งาน database หากทดสอบในเครื่องตัวเองให้ใช้ root 
        $dbpassword = "";
        $dbname = "shopping_cart";
        $dbport = "3306";
        $conn = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
        mysqli_set_charset($conn, 'utf8');
?>
