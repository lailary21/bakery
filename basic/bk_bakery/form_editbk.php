<?php
include("../condb/conndb.php");
$name_bakery = $_GET['name_bakery']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
$sql1 = "SELECT * FROM bakery WHERE name_bakery = '$name_bakery'"; //เรียกข้อมูลจากฟอร์มโดยกำหนดเงื่อนไข
$r1 = mysqli_query($conn,
        $sql1);
$row = mysqli_fetch_assoc($r1);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_bakery'] == 2) {
    echo "<script>alert('ไม่สามารถแก้ไขได้');history.back();</script>";
    return;
}
mysqli_close($conn);
?>

<html>
    <head>
        <title>ข้อมูลเบเกอรี่</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="bk_form.css">
    </head>
    <script src="../jquery/jquery-1.12.0.min.js"></script>

    <body>
        <img class="logo-head" src="../image/logo.jpg"></div>
    <form action="bk_edit.php" method="post">
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
                        <td width="300" align="center"> 
                            <input type="hidden" id="id_bakery" name="id_bakery" value="<?php echo "$row[id_bakery]"; ?>">
                            <h1>เบเกอรี่</h1>

                            <br>

                            ขนาด : 
                            <?php
                            include("../condb/conndb.php");
                            $sql7 = "SELECT * FROM size_price ";
                            $result4 = mysqli_query($conn,
                                    $sql7);
                            ?>
                          
                            <?php $row7 = $row['id_sp']; ?>
                            <select name="size_price">
                                <option value='0'>กรุณาเลือกขนาด</option>
                                <?php
                                while ($sgpResult = mysqli_fetch_array($result4)) {
                                    ?>
                                <option value='<?php echo $sgpResult['id_sp']; ?>' <?php if ($row7==$sgpResult['id_sp'])  echo 'selected';?>>
                                        <?php echo $sgpResult['name_sp']; ?></option>
                                    <?php } ?> 

                            </select> 

                    <br>
                    <?php
                    $rdo = "";
                    if (isset($row['status_bakery'])) {
                        $rdo = $row['status_bakery'];
                    }
                    ?>
                    <br>
                    <input type="submit" id="bt1" class="btn-submit" name="submit"  value="แก้ไข" onClick="alert('ยืนยันการแก้ไข')"> 
                    <input type="reset" id="bt2" class="btn-submit" name="submit" value="ยกเลิก"> 
                    <input type="button" id="bt3" class="btn-submit" name="submit" value="ย้อนกลับ" onclick="window.location = '../bk_bakery/bk_form.php';"> 
                    <br><br>  
                    <table width="500" border="1" align="center">
                        <tr>

                            
                            <th width="120"><div align="center">ชื่อขนาด</th>
                            <th width="91"><div align="center">ขนาด</th>
                            <th width="91"><div align="center">ราคา</th>  
                            <th width="80"><div align="center">สถานะ</th>
                        </tr> 
                        <?php
                        include("../condb/conndb.php");

                        $sql9 = "select * from  size_price  where id_sp = id_sp AND status_sp=1";
                        $query = mysqli_query($conn,
                                $sql9) or die($sql9);
                        while ($typeResult = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            
                            echo "<td div align='center'>" . $typeResult['name_sp'] . "</td>";
                            echo "<td div align='center'>" . $typeResult['size_sp'] . "</td>";
                            echo "<td div align='center'>" . $typeResult['price_sp'] . "</td>";
                            

                            $status = $typeResult['status_sp'];
                            if ($status == "1") {
                                $status = "ใช้งาน";
                            } else {
                                $status = "ไม่ใช้งาน";
                            }
                            echo "<td div align='center'>" . $status . "</td>";
                        }
                        ?>   
                        </td>
                        </tr>


                    </table><br>


                    </form>
                    </body>
                    </html>