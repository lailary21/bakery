<?php

//$dbhost = "localhost";
//$dbusername = "root"; // ชื่อผู้ใช้งาน database หากทดสอบในเครื่องตัวเองให้ใช้ root
//$dbpassword = "";
//$dbname = "bakery_online";
//$dbport = "3306";

ob_start();
session_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'bakery_online');
define('DB_PORT', '3306');

//$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
mysqli_set_charset($conn, 'utf8');

/* Addition Function */
function debugArray($array) {
  echo '<pre>';
//  print_r($array);
  var_dump($array);
  echo '</pre>';
  die;
}
