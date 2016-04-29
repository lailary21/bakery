
<html>
    <head>
        <title>Comment</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css.css">
    </head>
    <script></script>
    <style></style>
    <body>      
        <img class="logo-head" src="../image/1.jpg"> 
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
            <table width="800" align="center" bgcolor="#FFFFFF">        <!--ตารางใหญ่-->
                <tr>
                    <td>
                        <table width="700" border="1" align="center">           <!--ตารางพรีออร์เดอร์-->
                            <tr>
                                <th width="100" align="center">เลขที่ใบขาย</th>
                                <th width="130" align="center">เบเกอรี่</th>
                                <th width="130" align="center">วัน/เวลา</th>
                                <th width="300" align="center">คอมเม้น</th>
                            </tr> 
                            <?php
                            include 'connect.php';
                            $sql = "SELECT * FROM COMMENT, preorder_detail WHERE comment.orderno=preorder_detail.id_order";
                            $query = mysqli_query($conn,
                                    $sql) or die($sql);
                            while ($proResult = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td align='center'>" . $proResult['orderno'] . "</td>";
                                echo "<td align='center'>" . $proResult['name_bakery'] . "</td>";
                                echo "<td align='center'>" . $proResult['datetime_com'] . "</td>";
                                echo "<td align='center'>" . $proResult['com_text'] . "</td>";
                            }
                            ?>
                        </table><br>
                            <table width="500" align="center" border="0">
                                <tr>
                                    <td height="31" colspan="2" align="center">แสดงความคิดเห็น</td>
                                </tr>
                                <tr>
                                    <td align="right">เลขที่ใบสั่งซื้อ :</td>
                                    <td><input type="text" name="orderno" id="orderno"></td>
                                </tr>
                                <tr>
                                    <td align="right">จำนวนชิ้นที่สั่ง :</td>
                                    <td><input type="text" name="amount" id="amount"></td>
                                </tr>
                                <tr>
                                    <td align="right">ขนาด :</td> 
                                    <td><input type="text" name="amount" id="amount"></td>
                                </tr>
                                <tr>
                                    <td align="right">เบเกอรี่ :</td>
                                    <td><input type="text" name="name_bakery" id="name_bakery"></td>
                                </tr>
                                <tr>
                                    <td align="right">ชนิดเบเกอรี่ :</td>
                                    <td><input type="text" name="total2" id="total2"></td>
                                </tr>
                                <tr>
                                    <td align="right">รายละเอียด :</td>
                                    <td><textarea id="com_text" name="com_text" rows="7" cols="45"></textarea><a style="color: red"> *</a></td>
                                </tr>
                                <tr>
                                    <td align="right">วันที่ :</td>
                                    <td><input type="date" id="datetime_com" name="datetime_com" value="<?php echo date("d/m/Y H:i"); ?>"><a style="color: red"> *</a></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <input type="submit" id="bt1" class="btn-submit" name="submit"  value="เพิ่ม"> 
                                        <input type="reset" id="bt2" class="btn-reset" name="reset" value="ยกเลิก"></td>
                                </tr>
                            </table><br>
                        </table><br></td></tr>
            </table><br>                  
        </form>
    </body>
</html>
