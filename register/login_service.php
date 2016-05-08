<?php
session_start();
include './connect.php';
$user_mem = $_POST['user_mem'];
$passwd_mem = $_POST['passwd_mem'];
$sql = "select * from member where user_mem='$user_mem'and passwd_mem=MD5('$passwd_mem')";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
		//  username and password correct
		$_SESSION["id_mem"] = $row['id_mem'];
                $_SESSION["user_mem"] = $row['user_mem'];
                //echo $_SESSION["id_mem"];
		header("location:../main/maincenter.php");
   
} else {
	 echo "<script>alert('Username หรือ Password ผิด');history.back();</script>";
           return;
   
}
?>