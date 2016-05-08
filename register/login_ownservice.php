<?php
session_start();
include './connect.php';
$user_owner = $_POST['user_owner'];
$passwd_owner = $_POST['passwd_owner'];
$sql = "select * from owner where user_owner='$user_owner' and passwd_owner=MD5('$passwd_owner')";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
		//  username and password correct
		$_SESSION["id_owner"] = $row['id_owner'];
                $_SESSION["user_owner"] = $row['user_owner'];
                //echo $_SESSION["user_owner"];
		header("location:../main/maincenter.php");
   
} else {
           echo "<script>alert('Username หรือ Password ผิด');history.back();</script>";
           return;
   
}
?>
