<html>
    <head>
        <title>ข้อมูลกลุ่มเบเกอรี่</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="group_form.css">
    </head>
    <script src="../jquery/jquery-1.12.0.min.js"></script>

    <body>   
        <img class="logo-head" src="../image/logo.jpg"></div>
    <form action="group_add.php" method="post">
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
                            <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >ข้อมูลขนาดและราคา</span></a></td>
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
                        <td width="200" align="center"> 
                            <h1>กลุ่มเบเกอรี่</h1>
                            ชื่อกลุ่ม : 
                            <input type="text" id="name_group" name="name_group" maxlength="15"> <br> 

                            สถานะ :
                            <input type="radio" id="radio1" name="status_group"  value="1"> ใช้งาน
                            <input type="radio" id="radio2" name="status_group"  value="2"> ไม่ใช้งาน <br><br>

                            <input type="submit" id="bt1" class="btn-submit" name="submit"  value="เพิ่ม" onClick="alert('ยืนยันการบันทึก')"> 
                            <input type="reset" id="bt2" class="btn-submit" name="submit" value="ยกเลิก"> 
                            <br><br><br>

                            <table width="350" border="1">
                                <tr>
                                    
                                    <th width="50"><div align="center">รหัส</th></div>
                                    <th width="150"><div align="center">ชื่อกลุ่ม</th></div>
                                    <th width="80"><div align="center">สถานะ</th></div>
                                </tr>
                        </td>

                        <?php
                        $dbhost = "localhost";
                        $dbusername = "root"; // ชื่อผู้ใช้งาน database หากทดสอบในเครื่องตัวเองให้ใช้ root 
                        $dbpassword = "";
                        $dbname = "bakery_online";
                        $dbport = "3306";
                        $conn = mysqli_connect($dbhost,
                                $dbusername,
                                $dbpassword,
                                $dbname);
                        mysqli_set_charset($conn,
                                'utf8');
                        $sql = "select * from bakery_group";
                        $query = mysqli_query($conn,
                                $sql) or die($sql);
                        while ($groupResult = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td align='center'>" . $groupResult['id_group'] . "</td>";
                            echo "<td align='center'>" . $groupResult['name_group'] . "</td>";
                          
                            $status = $groupResult['status_group'];
                                    if($status == "1") {$status = "ใช้งาน";}
                                    else{$status = "ไม่ใช้งาน";}
                                    echo "<td align='center'>" . $status . "</td>";
                            echo "<td>"
                            ?>
                            <?php
                            echo"<td<center><a href ='form_update.php?name_group=$groupResult[name_group]'>แก้ไข </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//
                            echo"<td><center><a href ='form_delete.php?name_group=$groupResult[name_group]'>ลบ </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//ลิงค์และส่งค่าข้อูมูลเพื่อทำการลบข้อมูล       
                        }   
                        ?>
                    </tr>
                </table><br>

    </form>
</body>
</html>