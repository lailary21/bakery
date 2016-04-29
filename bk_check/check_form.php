<?php
    
    include '../register/connect.php';
    
    if(isset($_SESSION["id_mem"])){
            $name = $_SESSION["user_mem"];
            
    } 
    else if(isset($_SESSION["id_owner"])){
            $name = $_SESSION["user_owner"];
            
    }
    else {
        //$name = "guest";
        header("location:../register/login.php");
    }
    
?>
<html>
    <head>
        <title>ข้อมูลเบเกอรี่</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="check.css">
    </head>
    <script src="../jquery/jquery-1.12.0.min.js"></script>

    <body>
        <img class="logo-head" src="../image/logo.jpg"></div>
    <form action="checkstatus.php" method="post">
        <table class="menu-head">     
            <tr align="center" valign="middle" bgcolor="#CCFFCC">
                <td width="120" align="center">หน้าแรก</td>
                <td width="120" align="center">ติดต่อเรา</td>
                <td width="120" height="20" align="center">วิธีการสั่งซื้อ</td>
                <td width="120" align="center">แจ้งชำระเงิน</td>
                <td width="120" align="center" onclick="window.location = 'check_form.php';">เช็คสถานะ</td>
                <td width="120" align="center">ค้นหา</td>
                <td width="100">สมัครสมาชิก</td>
            </tr>
        </table>
        <tr>
            <td width="200"> 
                <table width="200" border="0" align="left" bgcolor="#F26B5E">    <!--ตารางแถบซ้ายมือ!-->
                    <tr align="center" bgcolor="#F26B5E">
                    <div class="menuleft">
                        <tr align="center" bgcolor="#FFCC99">
                            <td bgcolor="#FFCC99"><?php echo $name; ?></td>
                        </tr>
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
                        <tr align="center" bgcolor="#FFCC99">
                            <td><a><span onclick="window.location = '../bk_bakery/bk_form.php';" >ข้อมูลเบเกอรี่</span></a></td>
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
                        </tr>
                        <tr align="center" bgcolor="#FFCC99">
                            <td><a><span onclick="window.location = '../register/logout.php';" >Logout!!</span></a></td>
                        </tr></div>
                </table>

                <table width="700" bgcolor="#FFFFFF" align="center" > 
                    <tr>
                        <td width="300" align="center"> 
                            <h1>ตรวจสอบสถานะ</h1>


                            เลขที่ใบขาย:
                                
                            <input type="text" name="preorder" id="preorder" maxlength="9" placeholder="เช่น 590000001" onKeyUp="if (isNaN(this.value)) {
                          alert('กรุณากรอกตัวเลขเท่านั้น');
                          this.value = '';
                      }" > 
                            <!--ฟังก์ชัน isNan ประมวลผลตัวแปรที่ส่งเข้ามา เพื่อพิจารณาว่าเป็น NaN (not a number -- ไม่ใช่ตัวเลข) หรือไม่-->   
                            <!--ในเหตุการที่ผู้ใช้ป้อนหรือพิมพ์ตัวอักษรใด ๆ เข้ามาใน Textbox-->
                            <!--ถ้าไม่เท่ากับค่าที่ผู้ใช้ป้อนเข้ามา ก็ทำการล้างค่าที่อยู่ใน Textbox ให้เท่ากับ "" (this.value='')-->
                            <!--กรอกได้เฉพาะตัวอักษร <input type="text" name="text_key" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}"/>-->

                            <br><br>
                           
                            <input type="submit" id="bt3" class="btn-submit" name="submit" value="ตกลง">

                    </tr>
                </table><br>
  </form>
</body>
</html>