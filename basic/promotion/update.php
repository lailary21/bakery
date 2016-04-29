<?php
$pro_name = $_GET['pro_name']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
require_once("connect.php"); //เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล

$sql1 = "SELECT * FROM promotion WHERE pro_name = '$pro_name'"; //เรียกข้อมูลจากฟอร์มโดยกำหนดเงื่อนไข
$r1 = mysqli_query($conn,
        $sql1);
$row = mysqli_fetch_assoc($r1);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_pro'] == 2) {
    echo "<script>alert('ไม่สามารถแก้ไขได้');history.back();</script>";
}
mysqli_close($conn);
?>
<html>
    <head>
        <title>ข้อมูลโปรโมชั่น</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css.css">
    </head><script src="jquery-1.12.0.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $(".btn-reset").click(function () {
                var txt;
                var r = confirm("ต้องการยกเลิกใช่หรือไม่!");
                if (r == true) {
                    setTimeout(function () {
                        window.location.href = "promotion.php";
                    }, 500);
                } else {
                    txt = "You pressed Cancel!";
                }
            });
        });
        function OnlyNum() {
            if ((event.keyCode < 48 || event.keyCode > 57)) {
                alert('ใส่ตัวเลขได้เท่านั้น'); 
                event.returnValue = false;
            }
        }
    </script>
    <style></style>
    <body>      
        <img class="logo-head" src="image/1.jpg"> 
        <form action="saveupdate.php" method="post">
            <table width="1000" align="center" bgcolor="#FFFFCC">
                <tr>
                    <td><table width="500" border="0.5" align="center">
                            <tr>
                                <td height="31" colspan="2">ข้อมูลโปรโมชั่น :</td>
                            </tr>
                            <tr>
                                <td><input type="hidden" id="id_pro" name="id_pro" value="<?php echo "$row[id_pro]"; //แสดงข้อมูลที่จะแก้ไข?>"></td>
                            </tr>
                            <tr>
                                <td align="right">ชื่อโปรโมชั่น :</td>
                                <td><input type="text" id="pro_name" name="pro_name" value="<?php echo "$row[pro_name]"; //แสดงข้อมูลที่จะแก้ไข?>" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}"/></td>
                            </tr>
                            <tr>
                                <td align="right">รายละเอียด :</td>
                                <td><textarea name="pro_descrip" id="pro_descrip" cols="45" rows="5"><?php echo"$row[pro_descrip]"; //แสดงข้อมูลที่จะแก้ไข   ?></textarea></td>
                            </tr>
                            <tr>
                                <td align="right">วันที่ :</td>
                                <td><input type="date" id="initial_date_pro" name="initial_date_pro" min="2010-01-01" max="2060-12-31" value="<?php echo "$row[initial_date_pro]"; //แสดงข้อมูลที่จะแก้ไข    ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">ราคาเริ่มต้น :</td>
                                <td><input type="text" id="start_price" name="start_price" value="<?php echo "$row[start_price]"; //แสดงข้อมูลที่จะแก้ไข?>" onkeypress="OnlyNum()"></td>
                            </tr>
                            <tr>
                                <td align="right">ราคาสิ้นสุด :</td>
                                <td><input type="text" id="end_price" name="end_price" value="<?php echo "$row[end_price]"; //แสดงข้อมูลที่จะแก้ไข?>" onkeypress="OnlyNum()"></td>
                            </tr>
                            <tr>
                                <td align="right">ส่วนลด (%) :</td>
                                <td><input type="text" id="percent" name="percent" value="<?php echo "$row[percent]"; //แสดงข้อมูลที่จะแก้ไข?>" onkeypress="OnlyNum()"></td>
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