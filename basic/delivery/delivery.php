
<html>
    <head>
        <title>ข้อมูลอัตราค่าจัดส่ง</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css.css">
        <script src="jquery-1.12.0.min.js" type="text/javascript"></script>
    </head>
    <script>
        function OnlyNum() {
            if ((event.keyCode < 48 || event.keyCode > 57)) {
                alert('ใส่ตัวเลขได้เท่านั้น');
                event.returnValue = false;
            }
        }
        function checkInp()
        {
            var checked = $("#delivery input:checked").length > 0;
            
            if (!$('#delivery input[type="radio"]').is(':checked')) {
                alert("กรุณาเลือกวันทำงานอย่างน้อย 1 วัน");
                return false;
            }
        }
    </script>
    <style></style>
    <body>      
        <img class="logo-head" src="image/1.jpg"> 
        <form action="insert.php" method="post" name="delivery">
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
            <table width="700" align="center" bgcolor="#FFFFFF">
                <tr>
                    <td><table width="500" border="0" align="center">
                            <tr>
                                <td height="31" colspan="2">ข้อมูลอัตราค่าจัดส่ง</td>
                            </tr>
                            <tr>
                                <td align="right">ชื่อ :</td>
                                <td><input type="text" id="name_rate" name="name_rate" maxlength="20" onkeypress="if (!(event.keyCode < 48 || event.keyCode > 122)) {
                                            alert('กรุณากรอกภาษาไทยเท่านั้น');
                                            event.returnValue = false
                                        }
                                        ;"/><a style="color: red">&nbsp;*</a></td>
                            </tr>
                            <tr>
                                <td align="right">ราคา :</td>
                                <td><input type="text" id="rate_price" name="rate_price" maxlength="3" onkeypress="OnlyNum()"><a style="color: red"> *</a></td>
                            </tr>
                            <tr>
                                <td align="right">สถานะ :</td>
                                <td><input type="radio" id="enable" name="status_rate"  value="1" checked /> ใช้งาน
                                    <input type="radio" id="disable" name="status_rate"  value="2"/> ไม่ใช้งาน <a style="color: red">*</a></td>
                            </tr>
                            <tr>
                                <td align="right"></td>
                                <td><input type="submit" id="bt1" class="btn-submit" name="submit"  value="เพิ่ม"> 
                                    <input type="reset" id="bt2" class="btn-reset" name="reset" value="ยกเลิก"></td>
                            </tr>
                        </table><br>
                        <table width="460" border="1" align="center">
                            <tr>
                                <th width="79" align="center">รหัส</th>
                                <th width="100" align="center">ชื่อ</th>
                                <th width="80" align="center">ราคา</th>
                                <th width="75" align="center">สถานะ</th> 
                            </tr> 
                            <?php
                            include 'connect.php';
                            $sql = "select * from deliver_rate";
                            $query = mysqli_query($conn, $sql) or die($sql);
                            while ($proResult = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td align='center'>" . $proResult['id_rate'] . "</td>";
                                echo "<td align='center'>" . $proResult['name_rate'] . "</td>";
                                echo "<td align='center'>" . $proResult['rate_price'] . "</td>";
                                $status = $proResult['status_rate'];
                                if ($status == "1") {
                                    $status = "ใช้งาน";
                                } else {
                                    $status = "ไม่ใช้งาน";
                                }
                                echo "<td align='center'>" . $status . "</td>";
                                echo"<td><center><a href ='update.php?name_rate=$proResult[name_rate]'>แก้ไข </a></center></td>";
                                echo"<td><center><a href ='delete.php?name_rate=$proResult[name_rate]'>ลบ </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//ลิงค์และส่งค่าข้อูมูลเพื่อทำการลบข้อมูล
                            }
                            ?>
                        </table><br></td> </tr>
            </table><br>                  
        </form>
    </body>
</html>
