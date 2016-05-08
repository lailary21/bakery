<html>
    <head>
        <title>ข้อมูลเบเกอรี่</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="bk_form.css">
    </head>
    <script src="../jquery/jquery-1.12.0.min.js"></script>

    <body>
        <img class="logo-head" src="../image/logo.jpg"></div>
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
                    <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >ออกรายงาน</span></a></td>                      </tr></div>
        </table>
        <table width="700" bgcolor="#FFFFFF" align="center"  
            <tr>
                <td width="300" align="center" > 
                    <h1>เบเกอรี่</h1>
                    <form action="add_bk.php" method="post" enctype = "multipart/form-data">
                        ชื่อเบเกอรี่ : 
                        <input type="text" id="name_bakery" name="name_bakery"> <br> 
                        กลุ่มเบเกอรี่ :
                        <?php
                        include("../condb/conndb.php");
                        $sql4 = "SELECT * FROM bakery_group WHERE status_group !=2 ";
                        $result1 = mysqli_query($conn,
                                $sql4);
                        ?>
                        <select name="bakery_group">
                            <option value='0'>กรุณาเลือกชื่อกลุ่ม</option>
                            <?php
                            while ($gpResult = mysqli_fetch_array($result1)) {
                                ?>
                                <option value='<?php echo $gpResult['id_group']; ?>'>
                                    <?php echo $gpResult['name_group']; ?></option>
                            <?php } ?> 
                        </select> 
                        <br>
                        ชนิดเบเกอรี่ :
                        <?php
                        include("../condb/conndb.php");
                        $sql5 = "SELECT * FROM bakery_type WHERE status_type !=2";
                        $result2 = mysqli_query($conn,
                                $sql5);
                        ?>
                        <select name="bakery_type">
                            <option value='0'>กรุณาเลือกชนิด</option>
                            <?php
                            while ($typeResult = mysqli_fetch_array($result2)) {
                                ?>
                                <option value='<?php echo $typeResult['id_type']; ?>'>
                                    <?php echo $typeResult['name_type']; ?></option>
                            <?php } ?> 
                        </select> 
                        <br>
                        ขนาด : 
                        <?php
                        include("../condb/conndb.php");
                        $sql7 = "SELECT * FROM size_price WHERE status_sp !=2";
                        $result4 = mysqli_query($conn,
                                $sql7);
                        ?>
                        <select name="size_price">
                            <option value='0'>กรุณาเลือกขนาด</option>
                            <?php
                            while ($spsResult = mysqli_fetch_array($result4)) {
                                ?>
                                <option value='<?php echo $spsResult['id_sp']; ?>'>
                                    <?php echo $spsResult['name_sp']; ?></option>
                            <?php } ?> 
                        </select> 
                        <br> 
                        รูปภาพ :
                        <input type = "file" name = "fileToUpload" id = "fileToUpload" >
                        <br>
                        สถานะ :
                        <input type="radio" id="radio1" name="status_bakery"  value="1"> ใช้งาน
                        <input type="radio" id="radio2" name="status_bakery"  value="2"> ไม่ใช้งาน <br>
                        <br>
                        <input type='submit' id="bt1" class="btn-submit" name='submit' value='เพิ่ม' onClick="alert('ยืนยันการบันทึก')"> 
                        <input type="reset" id="bt2" class="btn-submit" name="submit" value="ยกเลิก"> 
                        <br><br><br>
                        <table width="900" border="1" align="center">
                            <tr>
                                <th width="91"><div align="center">รูปภาพ</th>
                                <th width="91"><div align="center">รหัส</th>
                                <th width="150"><div align="center">ชื่อเบเกอรี่</th>
                                <th width="150"><div align="center">กลุ่มเบเกอรี่</th>
                                <th width="150"><div align="center">ชนิดเบเกอรี่</th>
                                <th width="91"><div align="center">ราคา</th>
                                <th width="150"><div align="center">ชื่อขนาด</th>
                                <th width="91"><div align="center">ขนาด</th>   
                                <th width="91"><div align="center">สถานะ</th>
                            </tr> 

                            <?php
                            include("../condb/conndb.php");

                            $sql9 = "select * from bakery, bakery_type ,size_price ,bakery_group where bakery.id_sp=size_price.id_sp AND bakery.id_type=bakery_type.id_type AND bakery_type.id_group=bakery_group.id_group ORDER BY id_bakery ASC";
                            $query = mysqli_query($conn,
                                    $sql9) or die($sql9);
                            while ($typeResult = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                ?>
                                <td> <img width='160' height='100' border='1'src="../bk_pic/<?php echo $typeResult['photo']; ?>"> </td>
                                <?php
                                echo "<td div align='center'>" . $typeResult['id_bakery'] . "</td>";
                                echo "<td div align='center'>" . $typeResult['name_bakery'] . "</td>";
                                echo "<td div align='center'>" . $typeResult['name_group'] . "</td>";
                                echo "<td div align='center'>" . $typeResult['name_type'] . "</td>";
                                echo "<td div align='center'>" . $typeResult['price_sp'] . "</td>";
                                echo "<td div align='center'>" . $typeResult['name_sp'] . "</td>";
                                echo "<td div align='center'>" . $typeResult['size_sp'] . "</td>";
                                $status = $typeResult['status_bakery'];
                                if ($status == "1") {
                                    $status = "ใช้งาน";
                                } else {
                                    $status = "ไม่ใช้งาน";
                                }
                                echo "<td div align='center'>" . $status . "</td>";

                                echo "<td>"
                                ?>

                                <?php
                                echo"<td<center><a href ='form_editbk.php?name_bakery=$typeResult[name_bakery]'>แก้ไข </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//
                                echo"<td><center><a href ='form_deletebk.php?name_bakery=$typeResult[name_bakery]'>ลบ </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//ลิงค์และส่งค่าข้อูมูลเพื่อทำการลบข้อมูล       
                            }
                            ?>

                            </tr>
                        </table><br>
                    </form>
                    </body>
                    </html>