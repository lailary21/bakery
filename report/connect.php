<?php

function debugArray($array)
{
  echo '<pre>';
  print_r($array);
  echo '</pre>';
  die;
}

$dbhost = "localhost";
$dbusername = "root"; // ชื่อผู้ใช้งาน database หากทดสอบในเครื่องตัวเองให้ใช้ root
$dbpassword = "";
$dbname = "bakery_online";
$dbport = "3306";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname, $dbport) or die("ไม่สามารถติดต่อฐานข้อมูลได้");
mysqli_set_charset($conn, 'utf8');