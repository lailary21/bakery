<?php
include("../condb/conndb.php");
$name_group = $_GET['name_group']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
$sql1 = "SELECT * FROM bakery_group WHERE name_group = '$name_group'"; //เรียกข้อมูลจากฟอร์มโดยกำหนดเงื่อนไข
$r1 = mysqli_query($conn,
        $sql1);
$row = mysqli_fetch_assoc($r1);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_group'] == 2) {
    echo "<script>alert('ไม่สามารถแก้ไขได้');history.back();</script>";
     return;
}
mysqli_close($conn);
?>

<html>
    <head>
        <title>ข้อมูลกลุ่มเบเกอรี่</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="group_form.css">
    </head>
    <script src="../jquery/jquery-1.12.0.min.js"></script>
    
    <body>   
        <img class="logo-head" src="../image/logo.jpg"></div>
    <form action="group_update.php" method="post">

        <tr>
            <td width="200">
                <table width="200" border="0" align="left" bgcolor="#F26B5E">    <!--ตารางแถบซ้ายมือ!-->
                    <tr align="center" bgcolor="#F26B5E">
                    <div class="menuleft">
                        <td height="35">จัดการข้อมูลต่างๆ</td>
                        </tr>
                        <tr align="center" bgcolor="#FFFFCC">
                            <td bgcolor="#FFCC99"><a><span onclick="window.location = '../bk_owner/owner_form.php';" >ข้อมูลเจ้าของร้าน</span></a></td>
                        </tr>
                        <tr align="center" bgcolor="#FFFFCC">
                            <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >ข้อมูลสมาชิก</span></a></td>
                        </tr>
                        <tr align="center" bgcolor="#FFCC99">
                            <td bgcolor="#FFCC99"><a><span onclick="window.location = '../bk_group/group_form.php';" >ข้อมูลกลุ่มเบเกอรี่</span></a></td>
                        </tr>
                        <tr align="center" bgcolor="#FFFFCC">
                            <td><a><span onclick="window.location = '../bk_type/type_form.php';" >ข้อมูลชนิดเบเกอรี่</span></a></td>
                        </tr>
                        <tr align="center" bgcolor="#FFCC99">
                            <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >ข้อมูลขนาดและราคา</span></a></td>
                        </tr>
                        <tr align="center" bgcolor="#FFFFCC">
                            <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >Admin</span></a></td>
                        </tr>
                        <tr align="center" bgcolor="#FFCC99">
                            <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >ข้อมูลธนาคาร</span></a></td>
                        </tr>
                        <tr align="center" bgcolor="#FFFFCC">
                            <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >ข้อมูลโปรโมชั่น</span></a></td>
                        </tr>
                        <tr align="center" bgcolor="#FFCC99">
                            <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >ข้อมูลการจัดส่งเบเกอรี่</span></a></td>
                        </tr>
                        <tr align="center" bgcolor="#FFFFCC">
                            <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >รายการสั่งซื้อ</span></a></td>
                        </tr>
                        <tr align="center" bgcolor="#FFCC99">
                            <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >ยกเลิกเบเกอรี่</span></a></td>
                        </tr>
                        <tr align="center" bgcolor="#FFFFCC">
                            <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >ยืนยันการชำระเงิน</span></a></td>
                        </tr>
                        <tr align="center" bgcolor="#FFCC99">
                            <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >เปลี่ยนสถานะ</span></a></td>
                        </tr>
                        <tr align="center" bgcolor="#FFFFCC">
                            <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >ออกรายงาน</span></a></td>                        
                        </tr></div>
                </table>
                <table width="700" bgcolor="#FFFFFF" align="center" > 
                    <tr>
                        <td width="200" align="center"> 
                                 
                           <input type="hidden" id="id_group" name="id_group" value="<?php echo "$row[id_group]"; ?>">
                           <br>
                            ชื่อกลุ่ม : 
                            <input type="text" id="name_group" name="name_group" maxlength="15" value="<?php echo "$row[name_group]"; //แสดงข้อมูลที่จะแก้ไข    ?>"> <br> 
                   
                            <?php
                            $rdo = "";
                            if (isset($row['status_group'])) {
                                $rdo = $row['status_group'];
                            }
                            ?>
                            <br>
                            <input type="submit" id="bt1" class="btn-submit" name="submit"  value="แก้ไข" onClick="alert('ยืนยันการแก้ไข')"> 
                            <input type="reset" id="bt2" class="btn-submit" name="submit" value="ยกเลิก"> 
                            <input type="button" id="bt3" class="btn-submit" name="submit" value="ย้อนกลับ" onclick="window.location = '../bk_group/group_form.php';"> 
                            
                        </td>
                    </tr>
                </table><br>
    </form>
</body>
</html>