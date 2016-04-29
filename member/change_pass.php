<?php 
include './connect.php';
$user_mem = $_GET['user_mem']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
$id_mem = $_GET['id_mem'];
$sql1 = "SELECT * FROM member m , tel_mem t WHERE m.id_mem='$id_mem' AND m.id_mem=t.id_mem";
$query = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($query);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
?>
<html>
    <head>
        <title>แก้ไขรหัสสมาชิก</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
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
        <form id="form1" name="form1" method="post" action="new_pass.php">
            <br>
            <table width="1300" height="200" border="0" align="center"> <!--ตารางใหญ่!-->
                <tr>
                    <td width="1000" >                              
                        <table width="500" border="0" align="center" bgcolor="#FFFFCC">
                            <tr>
                                <td height="31" colspan="2">Change Password : </td>
                            </tr>
                             <tr>
                                <td><input type="hidden" id="id_mem" name="id_mem" value="<?php echo "$row[id_mem]"; //แสดงข้อมูลที่จะแก้ไข        ?>"></td>
                            </tr>
                            <tr><td align="right">ชื่อผู้ใช้งาน : </td>
                                <td><input  id="user_mem" name="user_mem" value="<?php echo "$row[user_mem]"; //แสดงข้อมูลที่จะแก้ไข        ?>"></td>
                            </tr>
                            <tr><td align="right">รหัสผ่านเดิม : </td> 
                                <td><input type="password" id="oldpass_mem" name="oldpass_mem"></td>
                            </tr>
                            <tr><td align="right">รหัสผ่านใหม่ : </td>
                                <td><input type="password" id="passwd_mem" name="passwd_mem"></td>
                            </tr>

                            <tr><td align="right">ยืนยันรหัสผ่านใหม่ : </td>
                                <td><input type="password" id="repass_mem" name="repass_mem"></td>
                            </tr>
                            <tr><td colspan="2" align="center">
                                    <input type="submit" id="bt1" name="submit"  value="submit"> 
                                    <input type="reset" id="bt2" name="reset" value="cancel"> </td>
                            </tr>
                            <br><br><br>
                            </td>
                            </tr>
                        </table>
            </table>
        </form>
    </body>
</html>