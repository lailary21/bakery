<?php
$fname_owner = $_GET['fname_owner']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
$id_owner = $_GET['id_owner'];
include './connect.php';
$sql1 = "SELECT * FROM owner m , tel_owner t WHERE m.id_owner='$id_owner' AND m.id_owner=t.id_owner";
$query = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($query);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_owner'] == 2){
    echo "<script>alert ('ไม่สามารถแก้ไขได้');history.back();</script>";
}
mysqli_close($conn);
?>
<html>
    <head>
        <title>ข้อมูลเจ้าของร้าน</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head><script src="../jquery/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $(".btn-reset").click(function () {
                var txt;
                var r = confirm("ต้องการยกเลิกใช่หรือไม่!");
                if (r == true) {
                    setTimeout(function () {
                        window.location.href = "own_data.php";
                    }, 1000);
                } else {
                    txt = "You pressed Cancel!";
                }
            });
        });</script>
    <style>
        .logo-head{
            position: static;
            margin-top: -8px;
            margin-left: -8px;
            margin-right: -8px;
            height: 160px;
            width: 1366px;
        }
        body{
            background-image: url(../image/b.jpg);
        }
    </style>
    <body>      
        <img class="logo-head" src="../image/1.jpg"> 
        <form action="o_update.php" method="post">
            <table width="1000" align="center" bgcolor="#FFFFCC">
                <tr>
                    <td><table width="500" border="0.5" align="center">
                            <tr>
                                <td height="31" colspan="2">ข้อมูลเจ้าของร้าน :</td>
                            </tr>
                            <tr>

                                <td><input type="hidden" id="id_owner" name="id_owner" value="<?php echo "$row[id_owner]"; //แสดงข้อมูลที่จะแก้ไข        ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">ชื่อ :</td>
                                <td><input type="text" id="fname_owner" name="fname_owner" value="<?php echo "$row[fname_owner]"; //แสดงข้อมูลที่จะแก้ไข        ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">นามสกุล :</td>
                                <td><input id="lname_owner" name="lname_owner" value="<?php echo "$row[lname_owner]"; //แสดงข้อมูลที่จะแก้ไข       ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">ที่อยู่ :</td>
                                <td><textarea name="address_owner" id="address_owner" cols="45" rows="5"><?php echo"$row[address_owner]"; //แสดงข้อมูลที่จะแก้ไข       ?></textarea></td>
                            </tr>
                            <tr>
                                <td align="right">เบอร์โทร :</td>
                                <td><input type="text" id="tel_owner" name="tel_owner" value="<?php echo "$row[tel_owner]"; //แสดงข้อมูลที่จะแก้ไข      ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">E-mail :</td>
                                <td><input type="text" id="email_owner" name="email_owner" value="<?php echo "$row[email_owner]"; //แสดงข้อมูลที่จะแก้ไข        ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">ชื่อผู้ใช้งาน :</td>
                                <td><input type="text" id="user_owner" name="user_owner" value="<?php echo "$row[user_owner]"; //แสดงข้อมูลที่จะแก้ไข        ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">รหัสผ่าน :</td>
                                <td><input type="text" id="passwd_owner" name="passwd_owner" value="<?php echo "$row[passwd_owner]"; //แสดงข้อมูลที่จะแก้ไข        ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">ยืนยันรหัสผ่าน :</td>
                                <td><input type="text" id="repass_owner" name="repass_owner"></td>
                            </tr>
                            <tr>
                                <td align="right">สถานะ : </td>
                                <td><?php
                                    $rdo = "";
                                    if (isset($row['status_owner'])) {
                                        $rdo = $row['status_owner'];
                                    }
                                    ?><input type="radio" name="status_owner" id="radio" value="1"<?php if ($rdo == "1") echo "checked"; ?> />ใช้งาน 
                                    <input type="radio" name="status_owner" id="radio2" value="2"<?php if ($rdo == "2") echo "checked"; ?> />ไม่ใช้งาน</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" id="bt1" class="btn-submit" name="submit"  value="แก้ไข"> 
                                    <input type="reset" id="bt2" class="btn-reset" name="reset" value="ยกเลิก"></td>
                            </tr>
                        </table></td></tr>
            </table><br>                  
        </form>
    </body>
</html>