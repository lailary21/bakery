<?php
include './connect.php'; //เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล
$name_bank = $_GET['name_bank']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
$sql1 = "SELECT * FROM bank WHERE name_bank = '$name_bank'"; //เรียกข้อมูลจากฟอร์มโดยกำหนดเงื่อนไข
$r1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($r1);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_bank'] == 2) {
    echo "<script>alert ('ไม่สามารถแก้ไขได้');history.back();</script>";
}
mysqli_close($conn);
?>
<html>
    <head>
        <title>ข้อมูลธนาคาร</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head><script src="../jquery/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $(".btn-reset").click(function () {
                var txt;
                var r = confirm("ต้องการยกเลิกใช่หรือไม่!");
                if (r == true) {
                    setTimeout(function () {
                        window.location.href = "bank.php";
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
            height: 152px;
            width: 1366px;
        }
        body{
            background-image: url(../image/b.jpg);
        }
    </style>
    <body>      
        <img class="logo-head" src="../image/1.jpg"> 
        <form action="b_update.php" method="post">
            <table width="1000" align="center" bgcolor="#FFFFCC">
                <tr>
                    <td><table width="500" border="0.5" align="center">
                            <tr>
                                <td height="31" colspan="2">ข้อมูลธนาคาร :</td>
                            </tr>
                            <tr>
                                <td><input type="hidden" id="id_bank" name="id_bank" value="<?php echo "$row[id_bank]"; //แสดงข้อมูลที่จะแก้ไข     ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">ชื่อธนาคาร :</td>
                                <td><input type="text" id="name_bank" name="name_bank" value="<?php echo "$row[name_bank]"; //แสดงข้อมูลที่จะแก้ไข     ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">ชื่อบัญชี :</td>
                                <td><input type="text" id="accname" name="accname" value="<?php echo"$row[accname]"; //แสดงข้อมูลที่จะแก้ไข    ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">เลขที่บัญชี :</td>
                                <td><input type="text" id="accnum" name="accnum" value="<?php echo "$row[accnum]"; //แสดงข้อมูลที่จะแก้ไข     ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">สาขา :</td>
                                <td><select name="branch" id="branch" value="<?php echo "$row[branch]"; //แสดงข้อมูลที่จะแก้ไข     ?>"> 
                                        <option value="" selected>------กรุณาเลือก------</option>
                                        <option value="หนองจอก">หนองจอก</option>
                                        <option value="ร่มเกล้า">ร่มเกล้า</option>
                                        <option value="คลองจั่น">คลองจั่น</option>
                                    </select></td><br>
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