<?php
header('Content-Type : text/html; charset=UTF-8');
include("../condb/conndb.php");
if ((empty($_POST['name_bakery'])) || (empty($_POST['status_bakery']))) {

    echo "<script>alert('ข้อมูลไม่ครบ');history.back();</script>";
    return;
}

$name_bakery = $_POST['name_bakery'];
$status_bakery = $_POST['status_bakery'];
$id_sp = $_POST['size_price'];
$id_type = $_POST['bakery_type'];
$target_dir = "../bk_pic/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,
        PATHINFO_EXTENSION);

if ($_POST['status_bakery'] != 1) {
    echo "<script>alert('สถานะต้องเป็นใช้งานหรือ1');history.back();</script>";
    return;
}

$sql1 = "SELECT * FROM bakery WHERE name_bakery = '$name_bakery'AND status_bakery ='$status_bakery'";
$r1 = mysqli_query($conn,
        $sql1);

if (mysqli_num_rows($r1) > 0) {
    echo "<script>alert('ข้อมูลซ้ำ')</script>";
} else {
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "<script>alert ('File is an image - " . $check["mime"] . ".')</script>";
            $uploadOk = 1;
        } else {
            echo "<script>alert ('File is not an image.')</script>";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo "<script>alert ('Sorry, file already exists.')</script>";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "<script>alert ('Sorry, your file is too large.')</script>";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "<script>alert ('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>alert ('Sorry, your file was not uploaded.')</script>";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
                        $target_file)) {

            $sql3 = "INSERT INTO bakery(id_sp,id_type,name_bakery,photo,status_bakery)VALUES('$id_sp','$id_type','$name_bakery','$target_file','$status_bakery')";
            $r3 = mysqli_query($conn,
                    $sql3);
            //echo $sql3;
            echo "<script>alert ('The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.')</script>";
        } else {
            echo "<script>alert ('Sorry, there was an error uploading your file.')</script>";
        }
    }

    mysqli_close($conn);
}
?>
<!--<META HTTP-EQUIV='Refresh' CONTENT = '0;URL=bk_form.php'> -->