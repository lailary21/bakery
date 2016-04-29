<?php
session_start();
include './connect.php';
header("Location:../main/main.php");

session_destroy();
?>
