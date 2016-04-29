<html>
    <head>
        <title>ข้อมูลสมาชิก</title>
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
        <form id="form1" name="form1" method="post" action="b_add.php">
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
                                <td> <br><h1>ข้อมูลสมาชิก</h1>
                                   
                                
                                    <label>ชื่อ</label>
                                    <input type="text" id="fname_mem" name="fname_mem"> <br> 

                                    <label>นามสกุล</label>
                                    <input type="text" id="lname_mem" name="lname_mem"> <br> 

                                    <label>เพศ</label>
                                    <input name="sex_mem" id="male" type="radio" value="ชาย"> ชาย
                                    <input name="sex_mem" id="female" type="radio" value="หญิง"> หญิง <br>

                                    <label>ที่อยู่</label>
                                    <input textarea name="address_mem" rows="5" id="address_mem"> <br> 

                                    <label>เบอร์โทร</label>
                                    <input type="text" id="tel_mem" name="tel_mem"> <br> 

                                    <label>E-mail</label>
                                    <input type="text" id="email_mem" name="email_mem" placeholder="simple@email.com"> <br> <br> <br> 

                                    <label>ชื่อผู้ใช้งาน</label>
                                    <input type="text" id="user_mem" name="user_mem"> <br> 

                                    <label>รหัสผ่าน</label>
                                    <input type="password" id="passwd_mem" name="passwd_mem"> <br> 

                                    <label>ยืนยันรหัสผ่าน</label>
                                    <input type="password" id="repass_mem" name="repass_mem"> <br> 

                                    <label>สถานะ</label>
                                    <input type="radio" id="enable" name="status_mem"  value="1"> ใช้งาน
                                    <input type="radio" id="disable" name="status_mem"  value="2"> ไม่ใช้งาน <br>

                                    <input type="submit" id="bt1" name="submit"  value="submit"> 
                                    <input type="reset" id="bt2" name="submit" value="ยกเลิก"> 
                                    <br><br><br>
                                </td>
                            </tr>
                        </table><table width="1000" border="1" align="center" bgcolor="#FFFFCC">
                            <tr>
                                <th width="500"><div align="center">รหัส</th>
                                <th width="500"><div align="center">ชื่อ</th>
                                <th width="500"><div align="center">นามสกุล</th>
                                <th width="100"><div align="center">เพศ</th>
                                <th width="2000"><div align="center">ที่อยู่</th>
                                <th width="1000"><div align="center">เบอร์โทร</th>
                                <th width="300"><div align="center">E-mail</th>
                                <th width="500"><div align="center">ชื่อผู้ใช้งาน</th>
                                <th width="91"><div align="center">สถานะ</th>
                            </tr>
                            </form>
                            <br><br><br>
                            </td>
                            <?php
                            include './connect.php';
                            $sql = "SELECT * FROM member ,tel_mem WHERE member.id_mem=tel_mem.id_mem";
                            $query = mysqli_query($conn, $sql) or die($sql);
                            while ($memResult = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td>" . $memResult['id_mem'] . "</td>";
                                echo "<td>" . $memResult['fname_mem'] . "</td>";
                                echo "<td>" . $memResult['lname_mem'] . "</td>";
                                echo "<td>" . $memResult['sex_mem'] . "</td>";
                                echo "<td>" . $memResult['address_mem'] . "</td>";
                                echo "<td>" . $memResult['tel_mem'] . "</td>";
                                echo "<td>" . $memResult['email_mem'] . "</td>";
                                echo "<td>" . $memResult['user_mem'] . "</td>";
                                echo "<td>" . $memResult['status_mem'] . "</td>";
                                echo"<td><center><a href ='update_mem.php?fname_mem=$memResult[fname_mem]&id_mem=$memResult[id_mem]'>แก้ไข </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//
                                echo"<td><center><a href ='delete_mem.php?fname_mem=$memResult[fname_mem]&id_mem=$memResult[id_mem]'>ลบ </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//ลิงค์และส่งค่าข้อูมูลเพื่อทำการลบข้อมูล                
                            }
                            ?>
                        </table>
            </table>
        </form>
    </body>
</html>
