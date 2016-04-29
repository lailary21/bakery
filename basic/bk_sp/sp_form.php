<!DOCTYPE html>
<html>
    <head>
        <title>ข้อมูลขนาดและราคา</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="sp_form.css">
    </head>
     <script src="../jquery/jquery-1.12.0.min.js"></script>
    <body>
         <img class="logo-head" src="../image/logo.jpg"></div>
         <form action="sp_add.php" method="post">
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
                        </tr></div>
                </table>
                <table width="700" bgcolor="#FFFFFF" align="center" > 
                    <tr>
                        <td width="300" align="center"> 
               <h1>ขนาดและราคา</h1>
        
                
            ชื่อขนาด :
            <input type="text" id="name_sp" name="name_sp" maxlength="20"> <br> 
            
            ขนาด :
            <input type="text" id="size_sp" name="size_sp" maxlength="30"> 
            <select name="size_sp1" id="size_sp1" >
                       <option value='0'>เลือกหน่วย</option>
                      <option value='ซม.'>เซนติเมตร</option>
                      <option value='นิ้ว'>นิ้ว</option>
                      
                    </select><br> 
            
            ราคา :
            <input type="text" id="price_sp" name="price_sp" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลขเท่านั้น'); this.value='';}" > <br>
            <!--ฟังก์ชัน isNan ประมวลผลตัวแปรที่ส่งเข้ามา เพื่อพิจารณาว่าเป็น NaN (not a number -- ไม่ใช่ตัวเลข) หรือไม่-->   
            <!--ในเหตุการที่ผู้ใช้ป้อนหรือพิมพ์ตัวอักษรใด ๆ เข้ามาใน Textbox-->
            <!--ถ้าไม่เท่ากับค่าที่ผู้ใช้ป้อนเข้ามา ก็ทำการล้างค่าที่อยู่ใน Textbox ให้เท่ากับ "" (this.value='')-->
            <!--กรอกได้เฉพาะตัวอักษร <input type="text" name="text_key" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}"/>-->
                            
            สถานะ :
            <input type="radio" id="radio5" name="status_sp"  value="1"> ใช้งาน
            <input type="radio" id="radio6" name="status_sp"  value="2"> ไม่ใช้งาน <br>
            
           <input type="submit" id="bt1" class="btn-submit" name="submit"  value="เพิ่ม" onClick="alert('ยืนยันการบันทึก')"> 
           <input type="reset" id="bt2" class="btn-submit" name="submit" value="ยกเลิก"> 
            <br><br>
            <table width="600" border="1">
                <tr>
                    <th width="80"><div align="center">รหัส</th>
                    <th width="150"><div align="center">ชื่อขนาด</th>
                    <th width="300"><div align="center">ขนาด</th>
                    <th width="80"><div align="center">ราคา</th>
                    <th width="70"><div align="center">สถานะ</th>
                </tr>
            </form>
       
         <?php 
        include("../condb/conndb.php");
        $sql = "select * from size_price" ;
        $query = mysqli_query($conn, $sql) or die($sql);
        while ($spResult = mysqli_fetch_array($query)) {
            echo "<tr>";   
        echo "<td>" . $spResult['id_sp'] . "</td>";  
        echo "<td>" . $spResult['name_sp'] . "</td>";   
        echo "<td>" . $spResult['size_sp'] . "</td>"; 
        echo "<td>" . $spResult['price_sp'] . "</td>"; 
         $status = $spResult['status_sp'];
                                    if($status == "1") {$status = "ใช้งาน";}
                                    else{$status = "ไม่ใช้งาน";}
                                    echo "<td>" . $status . "</td>";
           
        echo "<td>" ?> 
            <?php
                echo"<td<center><a href ='form_editsp.php?name_sp=$spResult[name_sp]'>แก้ไข </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//
                echo"<td><center><a href ='form_deletesp.php?name_sp=$spResult[name_sp]'>ลบ </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//ลิงค์และส่งค่าข้อูมูลเพื่อทำการลบข้อมูล       
                        }
                        ?>
   </tr>
                </table><br>

    </form>
</body>
</html>
