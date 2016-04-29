<?php
$name_rate = $_GET['name_rate']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
require_once("connect.php"); //เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล

$sql1 = "SELECT * FROM deliver_rate WHERE name_rate = '$name_rate'"; //เรียกข้อมูลจากฟอร์มโดยกำหนดเงื่อนไข
$r1 = mysqli_query($conn,
        $sql1);
$row = mysqli_fetch_assoc($r1);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_rate'] == 2) {
    echo "<script>alert('ไม่สามารถแก้ไขได้');history.back();</script>";
}
mysqli_close($conn);
?>
<html>
    <head>
        <title>ข้อมูลอัตราค่าจัดส่ง</title>
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
                        window.location.href = "delivery.php";
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
                                <td height="31" colspan="2">ข้อมูลอัตราค่าจัดส่ง :</td>
                            </tr>

                            <tr>
                                <td><input type="hidden" id="id_rate" name="id_rate" value="<?php echo "$row[id_rate]"; //แสดงข้อมูลที่จะแก้ไข    ?>"></td>
                            </tr>

                            <tr>
                                <td align="right">ชื่อ :</td>
                                <td><input type="text" id="name_rate" name="name_rate" value="<?php echo "$row[name_rate]"; //แสดงข้อมูลที่จะแก้ไข?>" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}"/></td>
                            </tr>
                            <tr>
                                <td align="right">ราคา :</td>
                                <td><input type="text" id="rate_price" name="rate_price" value="<?php echo "$row[rate_price]"; //แสดงข้อมูลที่จะแก้ไข    ?>" onkeypress="OnlyNum()"></td>
                            </tr>

                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" id="bt1" class="btn-submit" name="submit"  value="แก้ไข"> 
                                    <input type="reset" id="bt2" class="btn-reset" name="reset" value="ยกเลิก"> </td>
                            </tr>
                        </table></td></tr>
            </table><br>                  
        </form>
    </body>
</html>