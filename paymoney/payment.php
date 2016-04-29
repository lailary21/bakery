<html>
    <head>
        <title>การชำระเงิน</title>
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
        <form id="form1" name="form1" method="post" action="inform_pay.php">
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
                            <td align = "center"><h1>ข้อมูลการชำระเงิน</h1>
                            <input type="submit" id="bt1" name="submit"  value="แจ้งชำระเงิน">
                            </td>
                        </table><table width="700" border="1" align="center" bgcolor="#FFFFCC">
                            <tr>
                                <th width="79" align="center">ลำดับที่</th>
                                <th width="91"><div align="center">ชื่อธนาคาร</th>
                                <th width="91"><div align="center">ชื่อบัญชี</th>
                                <th width="91"><div align="center">เลขที่บัญชี</th>
                                <th width="91"><div align="center">สาขา</th>
                            </tr><br>
                            <?php
                            include './connect.php';
                            $sql = "SELECT * FROM bank";
                            $query = mysqli_query($conn, $sql) or die($sql);
                            while ($bankResult = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td>" . $bankResult['id_bank'] . "</td>";
                                echo "<td>" . $bankResult['name_bank'] . "</td>";
                                echo "<td>" . $bankResult['accname'] . "</td>";
                                echo "<td>" . $bankResult['accnum'] . "</td>";
                                echo "<td>" . $bankResult['branch'] . "</td>";
                                }
                            ?>
                        </table>
                    </td>
            </table>
        </form>
    </body>
</html>
