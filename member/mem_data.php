<html>
    <head>
        <title>ข้อมูลสมาชิก</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <script>
        function OnlyNum() {
            if ((event.keyCode < 48 || event.keyCode > 57)) {
                alert('ใส่ตัวเลขได้เท่านั้น');
                event.returnValue = false;
            }
        }
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
        <img class="logo-head" width="1340" src="../image/1.jpg"> 
        <form id="form1" name="form1" method="post" action="m_add.php">
            <br>
            <table width="1340" height="57" border="0" align="center">
                <tr align="center" align="middle" bgcolor="#CCFFCC">
                    <td width="171" align="center"><a href="../main/main.php">หน้าแรก</a></td>
                    <td width="171" align="center">ติดต่อเรา</td>
                    <td width="171" height="20" align="center">วิธีการสั่งซื้อ</td>
                    <td width="171" align="center"><a href="../paymoney/payment.php">แจ้งชำระเงิน</a></td>
                    <td width="171" align="center">เช็คสถานะ</td>
                    <td width="171" align="center"><a href="../search/search_form.php">ค้นหา</a></td>
                    <td width="171" align="center"><a href="../register/register_m.php">สมัครสมาชิก</a><br></td>
                </tr>
            </table>
            <table width="1300" height="200" border="0" align="center"> <!--ตารางใหญ่!-->
                <tr>
                    <td width="230" >
                        <table width="200" border="0" align="center" bgcolor="#F26B5E">    <!--ตารางแถบซ้ายมือ!-->
                            <tr align="center" bgcolor="#F26B5E">
                                <td height="35">จัดการข้อมูลต่างๆ</td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td bgcolor="#FFCC99"><a href="../owner/own_data.php">ข้อมูลเจ้าของร้าน</a></td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td><a href="../member/mem_data.php">ข้อมูลสมาชิก</a></td>
                            </tr>
                            <tr align="center" bgcolor="#FFCC99">
                                <td bgcolor="#FFCC99">ข้อมูลกลุ่มเบเกอรี่</td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td>ข้อมูลชนิดเบเกอรี่</td>
                            </tr>
                            <tr align="center" bgcolor="#FFCC99">
                                <td>ช้อมูลขนาดและราคา</td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td>Admin</td>
                            </tr>
                            <tr align="center" bgcolor="#FFCC99">
                                <td><a href="../bank/bank.php">ข้อมูลธนาคาร</a></td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td>ข้อมูลโปรโมชั่น</td>
                            </tr>
                            <tr align="center" bgcolor="#FFCC99">
                                <td>ข้อมูลการจัดส่งเบเกอรี่</td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td>รายการสั่งซื้อ</td>
                            </tr>
                            <tr align="center" bgcolor="#FFCC99">
                                <td>ยกเลิกเบเกอรี่</td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td>ยืนยันการชำระเงิน</td>
                            </tr>
                            <tr align="center" bgcolor="#FFCC99">
                                <td>เปลี่ยนสถานะ</td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td>ออกรายงาน</td>                        
                            </tr>
                        </table>
                    <td width="1000" >                              
                        <table width="500" border="0" border="center" align="center" bgcolor="#FFFFCC">
                            <tr>
                                <td height="31" colspan="2">ข้อมูลสมาชิก</td>
                            </tr>
                            <tr><td align="right">ชื่อ : </td>
                                <td><input type="text" id="fname_mem" name="fname_mem" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}"/><a style="color: crimson"> *</a></td>
                            </tr>
                            <tr><td align="right">นามสกุล : </td>
                                <td><input type="text" id="lname_mem" name="lname_mem" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}"/><a style="color: crimson"> *</a></td>
                            </tr>
                            <tr><td align="right">เพศ : </td>
                                <td><input name="sex_mem" id="male" type="radio" value="ชาย"> ชาย
                                    <input name="sex_mem" id="female" type="radio" value="หญิง"> หญิง<a style="color: crimson"> *</a></td>
                            </tr>
                            <tr><td align="right">ที่อยู่ : </td>
                                <td><input textarea name="address_mem" rows="5" id="address_mem"><a style="color: crimson"> *</a></td>
                            </tr>
                            <tr><td align="right">เบอร์โทร : </td>
                                <td><input type="text" id="tel_mem" name="tel_mem" maxlength="10" onkeypress="OnlyNum()"><a style="color: crimson"> *</a></td> 
                            </tr>
                            <tr><td align="right">E-mail : </td>
                                <td><input type="text" id="email_mem" name="email_mem" placeholder="simple@email.com"></td>
                            </tr>
                            <tr><td align="right">ชื่อผู้ใช้งาน : </td>
                                <td><input type="text" id="user_mem" name="user_mem"><a style="color: crimson"> *</a></td>
                            </tr>
                            <tr><td align="right">รหัสผ่าน : </td>
                                <td><input type="password" id="passwd_mem" name="passwd_mem" maxlength="10"><a style="color: crimson"> *</a></td>
                            </tr>
                            <tr><td align="right">ยืนยันรหัสผ่าน : 
                                <td><input type="password" id="repass_mem" name="repass_mem" maxlength="10"><a style="color: crimson"> *</a></td>
                            </tr>
                            <tr><td align="right">สถานะ : 
                                <td><input type="radio" id="enable" name="status_mem"  value="1"> ใช้งาน
                                    <input type="radio" id="disable" name="status_mem"  value="2"> ไม่ใช้งาน<a style="color: crimson"> *</a></td>
                            </tr>
                            <tr><td align="center">
                                <td><input type="submit" id="bt1" name="submit"  value="submit"> 
                                    <input type="reset" id="bt2" name="reset" value="cancel"> </td></tr>
                            <br><br><br>
                        </table><table width="1100" border="0" align="center" bgcolor="#FFFFCC">
                            <tr align="center" bgcolor="#B8875B">
                                <th width="100">รหัส</th>
                                <th width="200">ชื่อ</th>
                                <th width="200">นามสกุล</th>
                                <th width="100">เพศ</th>
                                <th width="300">ที่อยู่</th>
                                <th width="120">เบอร์โทร</th>
                                <th width="170">E-mail</th>
                                <th width="170">ชื่อผู้ใช้งาน</th>
                                <th width="200">สถานะ</th>
                            </tr>
                            <br><br><br>
                            <?php
                            include './connect.php';
                            $sql = "SELECT * FROM member ,tel_mem WHERE member.id_mem=tel_mem.id_mem";
                            $query = mysqli_query($conn, $sql) or die($sql);
                            while ($memResult = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo '<td align="center">' . $memResult['id_mem'] . '</td>';
                                echo '<td align="center">' . $memResult['fname_mem'] . '</td>';
                                echo '<td align="center">' . $memResult['lname_mem'] . '</td>';
                                echo '<td align="center">' . $memResult['sex_mem'] . '</td>';
                                echo '<td align="center">' . $memResult['address_mem'] . '</td>';
                                echo '<td align="center">' . $memResult['tel_mem'] . '</td>';
                                echo '<td align="center">' . $memResult['email_mem'] . '</td>';
                                echo '<td align="center">' . $memResult['user_mem'] . '</td>';
                                $status = $memResult['status_mem'];
                                if ($status == "1") {
                                    $status = "ใช้งาน";
                                } else {
                                    $status = "ไม่ใช้งาน";
                                }
                                echo '<td align="center">' . $status . '</td>';
                                echo "<td><center><a href ='update_mem.php?fname_mem=$memResult[fname_mem]&id_mem=$memResult[id_mem]'>แก้ไข </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//
                                echo "<td><center><a href ='delete_mem.php?fname_mem=$memResult[fname_mem]&id_mem=$memResult[id_mem]'>ลบ </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//ลิงค์และส่งค่าข้อูมูลเพื่อทำการลบข้อมูล                
                            }
                            ?>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
