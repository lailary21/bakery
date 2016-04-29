<?php
include './connect.php';
$fname_mem = $_GET['fname_mem']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
$id_mem = $_GET['id_mem'];
$sql1 = "SELECT * FROM member m , tel_mem t WHERE m.id_mem='$id_mem' AND m.id_mem=t.id_mem";
$query = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($query);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_mem'] == 2) {
    echo "<script>alert ('ไม่สามารถแก้ไขได้');history.back();</script>";
}
mysqli_close($conn);
?>
<html>
    <head>
        <title>ข้อมูลสมาชิก</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head><script src="../jquery/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $(".btn-reset").click(function () {
                var txt;
                var r = confirm("ต้องการยกเลิกใช่หรือไม่!");
                if (r == true) {
                    setTimeout(function () {
                        window.location.href = "mem_data.php";
                    }, 1000);
                } else {
                    txt = "You pressed Cancel!";
                }
            });
        });
    </script>  
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
        <form action="m_update.php" method="post">
            <table width="1000" align="center" bgcolor="#FFFFCC">
                <tr>
                    <td><table width="500" border="0.5" align="center">
                            <tr>
                                <td height="31" colspan="2">ข้อมูลสมาชิก :</td>
                            </tr>
                            <tr>

                                <td><input type="hidden" id="id_mem" name="id_mem" value="<?php echo "$row[id_mem]"; //แสดงข้อมูลที่จะแก้ไข          ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">ชื่อสมาชิก :</td>
                                <td><input type="text" id="fname_mem" name="fname_mem" value="<?php echo "$row[fname_mem]"; //แสดงข้อมูลที่จะแก้ไข          ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">นามสกุล :</td>
                                <td><input id="lname_mem" name="lname_mem" value="<?php echo "$row[lname_mem]"; //แสดงข้อมูลที่จะแก้ไข         ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">เพศ : </td>
                                <td><?php
                                    $rdo = "";
                                    if (isset($row['sex_mem'])) {
                                        $rdo = $row['sex_mem'];
                                    }
                                    ?><input type="radio" name="sex_mem" id="radio" value="ชาย"<?php if ($rdo == "ชาย") echo "checked"; ?> />ชาย 
                                    <input type="radio" name="sex_mem" id="radio2" value="หญิง"<?php if ($rdo == "หญิง") echo "checked"; ?> />หญิง</td>
                            </tr>
                            <tr>
                                <td align="right">ที่อยู่ :</td>
                                <td><textarea name="address_mem" id="address_mem" cols="45" rows="5"><?php echo"$row[address_mem]"; //แสดงข้อมูลที่จะแก้ไข         ?></textarea></td>
                            </tr>
                            <tr>
                                <td align="right">เบอร์โทร :</td>
                                <td><input type="text" id="tel_mem" name="tel_mem" value="<?php echo "$row[tel_mem]"; //แสดงข้อมูลที่จะแก้ไข        ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">E-mail :</td>
                                <td><input type="text" id="email_mem" name="email_mem" value="<?php echo "$row[email_mem]"; //แสดงข้อมูลที่จะแก้ไข          ?>"></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" id="bt1" class="btn-submit" name="submit"  value="แก้ไข"> 
                                    <input type="reset" id="bt2" class="btn-reset" name="reset" value="ยกเลิก">
                                    <?php echo "<td align='left'><a href ='change_pass.php?user_mem=$row[user_mem]&id_mem=$row[id_mem]'>แก้ไขรหัส </a></td>"; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>                
        </form>
    </body>
</html>

