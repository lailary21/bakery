<?php
include("../condb/conndb.php");
$name_sp = $_GET['name_sp']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
$sql1 = "SELECT * FROM size_price WHERE name_sp = '$name_sp'"; //เรียกข้อมูลจากฟอร์มโดยกำหนดเงื่อนไข
$r1 = mysqli_query($conn,
        $sql1);
$row = mysqli_fetch_assoc($r1);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_sp'] == 2) {
    echo "<script>alert('ไม่สามารถแก้ไขได้');history.back();</script>";
     return;
}
mysqli_close($conn);
?>
<html>
    <head>
        <title>ข้อมูลขนาดและราคา</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="sp_form.css">
    </head>
     <script src="../jquery/jquery-1.12.0.min.js"></script>
    <body>
         <img class="logo-head" src="../image/logo.jpg"></div>
         <form action="sp_edit.php" method="post">
          <table class="menu-head">     
            <tr align="center" valign="middle" bgcolor="#CCFFCC">
                <td width="120" align="center">หน้าแรก</td>
                <td width="120" align="center">ติดต่อเรา</td>
                <td width="120" height="20" align="center">วิธีการสั่งซื้อ</td>
                <td width="120" align="center">แจ้งชำระเงิน</td>
                <td width="120" align="center">เช็คสถานะ</td>
                <td width="120" align="center">ค้นหา</td>
                <td width="100">สมัครสมาชิก</td>
            </tr>
        </table>
        <tr>
            <td width="200"> 
                <table width="200" border="0" align="left" bgcolor="#F26B5E">    <!--ตารางแถบซ้ายมือ!-->
                    <tr align="center" bgcolor="#F26B5E">
                    <div class="menuleft">
                        <td height="35" >จัดการข้อมูลต่างๆ</td>
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
                            <td><a><span onclick="window.location = '../bk_sp/sp_form.php';" >ข้อมูลขนาดและราคา</span></a></td>
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
                                 
                           <input type="hidden" id="id_sp" name="id_sp" value="<?php echo "$row[id_sp]"; ?>">
                           <br>
                           ชื่อขนาด :
            <input type="text" id="name_sp" name="name_sp" maxlength="20"value="<?php echo "$row[name_sp]"; //แสดงข้อมูลที่จะแก้ไข    ?>"> <br> 
            
            ขนาด :
            <input type="text" id="size_sp" name="size_sp" maxlength="30" value="<?php echo "$row[size_sp]"; //แสดงข้อมูลที่จะแก้ไข    ?>"> <br> 
            
            ราคา :
            <input type="text" id="price_sp" name="price_sp" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลขเท่านั้น'); this.value='';}" value="<?php echo "$row[price_sp]"; //แสดงข้อมูลที่จะแก้ไข    ?>"> <br> 
            <!--ฟังก์ชัน isNan ประมวลผลตัวแปรที่ส่งเข้ามา เพื่อพิจารณาว่าเป็น NaN (not a number -- ไม่ใช่ตัวเลข) หรือไม่-->   
            <!--ในเหตุการที่ผู้ใช้ป้อนหรือพิมพ์ตัวอักษรใด ๆ เข้ามาใน Textbox-->
            <!--ถ้าไม่เท่ากับค่าที่ผู้ใช้ป้อนเข้ามา ก็ทำการล้างค่าที่อยู่ใน Textbox ให้เท่ากับ "" (this.value='')-->
            <!--กรอกได้เฉพาะตัวอักษร <input type="text" name="text_key" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}"/>-->
                            
                   
                            <?php
                            $rdo = "";
                            if (isset($row['status_sp'])) {
                                $rdo = $row['status_sp'];
                            }
                            ?>
                            <br>
                            <input type="submit" id="bt1" class="btn-submit" name="submit"  value="แก้ไข" onClick="alert('ยืนยันการแก้ไข')"> 
                            <input type="reset" id="bt2" class="btn-submit" name="submit" value="ยกเลิก"> 
                            <input type="button" id="bt3" class="btn-submit" name="submit" value="ย้อนกลับ" onclick="window.location = '../bk_sp/sp_form.php';"> 
                            
                        </td>
                    </tr>
                </table><br>
    </form>
</body>
</html>