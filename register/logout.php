<?php
session_start();
include './connect.php';
if(isset($_SESSION["id_owner"])){
    session_destroy();
    header("Refresh:0;url=../register/login_own.php");
    
    }
   elseif(isset($_SESSION["id_mem"])){
       session_destroy();
       header("Refresh:0;url=../main/form_login.php"); 
    }

?>
