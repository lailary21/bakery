
<html>
    <head>
        <title>จัดทำโปรโมชั่น</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css.css">

        <script src="jquery-1.12.0.min.js" type="text/javascript"></script>
    </head>
    <body>      
        <img class="logo-head" src="image/1.jpg"> 
        <form action="chechstatus_from.php" method="post">
            <table class="menu-head">                                            <!--แถบข้างบน!!-->  
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
            <table width="200" border="0" align="left" bgcolor="#F26B5E">        <!--ตารางแถบซ้ายมือ!!-->
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

            <table width="800" align="center" bgcolor="#FFFFFF">               <!--ตารางสีครีม-->
                <tr>
                    <td>
                        <table width="300" border="0.5" align="center">
                            <tr>
                                <td colspan="3" align="center"><h3>รายการตรวจสอบสถานะ</h3></td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="400" border="1" align="center">           <!--ตารางพรีออร์เดอร์-->
                                        <tr>
                                            <th width="90" align="center">เลขที่ใบขาย</td>
                                            <th width="97" align="center">สถานะจัดส่ง</td>
                                        </tr>                             
                                        <?php
                                        include 'connect.php';
                                        $sql = "select * from preorder_detail";
                                        $query = mysqli_query($conn,
                                                $sql) or die($sql);
                                        $proResult = mysqli_fetch_array($query);
                                            echo "<tr>";
                                            echo "<td align='center'>" . $proResult['id_order'] . "</td>";
                                            echo "<td align='center'>" . $proResult['amount'] . "</td>";
                                        
                                        ?>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" name="submit" id="submit" value="ตกลง">
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>         
        </form>
    </body>
</html>