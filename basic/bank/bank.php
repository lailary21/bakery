<!DOCTYPE html>
<html>
    <head>
        <title>ข้อมูลธนาคาร</title>
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
            background-image: url(image/b.jpg);
        }
    </style>
    <body>
        <img class="logo-head" src="image/1.jpg"> 
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
                                <td height="31" colspan="2">ข้อมูลธนาคาร :</td>
                            </tr>
                            <tr>
                                <td align="right">ชื่อธนาคาร :</td>
                                <td><input type="text" id="name_bank" name="name_bank"><td>
                            </tr>
                            <tr>
                                <td align="right">ชื่อบัญชี :</td>
                                <td><input type="text" id="accname" name="accname"><td>
                            </tr>
                            <tr>
                                <td align="right">เลขที่บัญชี :</td>
                                <td><input type="text" id="accnum" name="accnum"><td>
                            </tr>
                            <tr>
                                <td align="right">สาขา :</td>
                                <td><select name="branch" id="branch"> 
                                        <option value="" selected>------กรุณาเลือก------</option>
                                        <option value="หนองจอก">หนองจอก</option>
                                        <option value="ร่มเกล้า">ร่มเกล้า</option>
                                        <option value="คลองจั่น">คลองจั่น</option><br>
                                    </select></td>
                            </tr>
                            <tr>
                                <td align="right">สถานะ :</td>
                                <td><input type="radio" id="enable" name="status_bank"  value="1"> ใช้งาน
                                    <input type="radio" id="disable" name="status_bank"  value="2"> ไม่ใช้งาน </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                <input type="submit" id="bt1" name="submit"  value="submit"> 
                                <input type="submit" id="bt2" name="submit" value="ยกเลิก"> </td>
                            </tr>
                        </table><table width="800" border="1" align="center" bgcolor="#FFFFCC">
                            <tr>
                                <th width="79" align="center">รหัส</th>
                                <th width="140"><div align="center">ชื่อธนาคาร</th>
                                <th width="170"><div align="center">ชื่อบัญชี</th>
                                <th width="120"><div align="center">เลขที่บัญชี</th>
                                <th width="91"><div align="center">สาขา</th>
                                <th width="75"><div align="center">สถานะ</th>
                            </tr>
                            </form>
                            <br><br><br>
                            </td>

                            <?php
                            include './connect.php';
                            $sql = "select * from bank";
                            $query = mysqli_query($conn, $sql) or die($sql);
                            while ($bankResult = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td align='center'>" . $bankResult['id_bank'] . "</td>";
                                echo "<td align='center'>" . $bankResult['name_bank'] . "</td>";
                                echo "<td align='center'>" . $bankResult['accname'] . "</td>";
                                echo "<td align='center'>" . $bankResult['accnum'] . "</td>";
                                echo "<td align='center'>" . $bankResult['branch'] . "</td>";
                                echo "<td align='center'>" . $bankResult['status_bank'] . "</td>";
                                echo"<td><center><a href ='update_bank.php?name_bank=$bankResult[name_bank]'>แก้ไข </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//
                                echo"<td><center><a href ='delete_bank.php?name_bank=$bankResult[name_bank]'>ลบ </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//ลิงค์และส่งค่าข้อูมูลเพื่อทำการลบข้อมูล                
                            }
                            ?>
                        </table><br></td> </tr>
            </table>
        </form>
    </body>
</html>
