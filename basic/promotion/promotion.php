
<html>
    <head>
        <title>ข้อมูลโปรโมชั่น</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css.css">
    </head>
    <script>
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
        <form action="insert.php" method="post">
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
            <table width="1000" align="center" bgcolor="#FFFFCC">        <!--ตารางใหญ่-->
                <tr>
                    <td><table width="500" border="0.5" align="center">
                            <tr>
                                <td height="31" colspan="2">ข้อมูลโปรโมชั่น :</td>
                            </tr>
                            <tr>
                                <td align="right">ชื่อโปรโมชั่น :</td>
                                <td><input type="text" id="pro_name" name="pro_name" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}"/><a style="color: red"> *</a></td>
                            </tr>
                            <tr>
                                <td align="right">รายละเอียด :</td>
                                <td><textarea id="pro_descrip" name="pro_descrip" rows="3" cols="30"></textarea><a style="color: red"> *</a></td>
                            </tr>
                            <tr>
                                <td align="right">วันที่ :</td>
                                <td><input type="date" id="initial_date_pro" name="initial_date_pro"><a style="color: red"> *</a></td>
                            </tr>
                            <tr>
                                <td align="right">ราคาเริ่มต้น :</td>
                                <td><input type="text" id="start_price" name="start_price" onkeypress="OnlyNum()"><a style="color: red"> *</a></td>
                            </tr>
                            <tr>
                                <td align="right">ราคาสิ้นสุด :</td>
                                <td><input type="text" id="end_price" name="end_price" onkeypress="OnlyNum()"><a style="color: red"> *</a></td>
                            </tr>
                            <tr>
                                <td align="right">ส่วนลด (%) :</td>
                                <td><input type="text" id="percent" name="percent" onkeypress="OnlyNum()"><a style="color: red"> *</a></td>
                            </tr>
                            <tr>
                                <td align="right">สถานะ :</td>
                                <td><input type="radio" id="enable" name="status_pro"  value="1" /> ใช้งาน
                                    <input type="radio" id="disable" name="status_pro"  value="2"/> ไม่ใช้งาน <a style="color: red">  *</a></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" id="bt1" class="btn-submit" name="submit"  value="เพิ่ม"> 
                                    <input type="reset" id="bt2" class="btn-reset" name="reset" value="ยกเลิก"></td>
                            </tr>
                        </table><br>
                        <table width="990" border="1" align="center">
                            <tr>
                                <th width="79" align="center">รหัส</th>
                                <th width="130" align="center">ชื่อโปรโมชั่น</th>
                                <th width="170" align="center">รายละเอียด</th>
                                <th width="85" align="center">วันที่</th>
                                <th width="100" align="center">ราคาเริ่มต้น</th>
                                <th width="110" align="center">ราคาสิ้นสุด</th>
                                <th width="100" align="center">ส่วนลด(%)</th>
                                <th width="75" align="center">สถานะ</th> 
                            </tr> 
                            <?php
                            include 'connect.php';
                            $sql = "select * from promotion";
                            $query = mysqli_query($conn,
                                    $sql) or die($sql);
                            while ($proResult = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td align='center'>" . $proResult['id_pro'] . "</td>";
                                echo "<td align='center'>" . $proResult['pro_name'] . "</td>";
                                echo "<td align='center'>" . $proResult['pro_descrip'] . "</td>";
                                echo "<td align='center'>" . $proResult['initial_date_pro'] . "</td>";
                                echo "<td align='center'>" . $proResult['start_price'] . "</td>";
                                echo "<td align='center'>" . $proResult['end_price'] . "</td>";
                                echo "<td align='center'>" . $proResult['percent'] . "</td>";
                                $status = $proResult['status_pro'];
                                if ($status == "1") {
                                    $status = "ใช้งาน";
                                } else {
                                    $status = "ไม่ใช้งาน";
                                }
                                echo "<td align='center'>" . $status . "</td>";
                                echo"<td><center><a href ='update.php?pro_name=$proResult[pro_name]'>แก้ไข </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//
                                echo"<td><center><a href ='delete.php?pro_name=$proResult[pro_name]'>ลบ </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//ลิงค์และส่งค่าข้อูมูลเพื่อทำการลบข้อมูล
                            }
                            ?>
                        </table><br></td> </tr>
            </table><br>                  
        </form>
    </body>
</html>
