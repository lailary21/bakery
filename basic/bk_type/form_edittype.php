<?php
include("../condb/conndb.php");
$name_type = $_GET['name_type']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
$sql1 = "SELECT * FROM bakery_type WHERE name_type = '$name_type'"; //เรียกข้อมูลจากฟอร์มโดยกำหนดเงื่อนไข
$r1 = mysqli_query($conn,
        $sql1);

$row = mysqli_fetch_assoc($r1);


//ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข

if ($row['status_type'] == 2) {
    echo "<script>alert('ไม่สามารถแก้ไขได้');history.back();</script>";
    return;
}
//mysqli_close($conn);
?>
<html>
    <head>

        <title>ข้อมูลชนิดเบเกอรี่</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="type_form.css">
    </head>
    <script src="../jquery/jquery-1.12.0.min.js" ></script>

    <body>   
        <img class="logo-head" src="../image/logo.jpg"></div>
    <form name="frm1" action="type_edit.php?action=add" method="post">

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

                            <input type="hidden" id="id_type" name="id_type" value="<?php echo "$row[id_type]"; ?>">

                            <h1>ชนิดเบเกอรี่</h1>              
                            ชื่อเบเกอรี่ : 
                            <input type="text" id="name_type" name="name_type" maxlength="15" value="<?php echo "$row[name_type]"; //แสดงข้อมูลที่จะแก้ไข                       ?>"> <br> 

                            กลุ่มเบเกอรี่ :
                            <?php
                            $sql4 = "SELECT * FROM bakery_group ";
                            $result1 = mysqli_query($conn,
                                    $sql4);
                            //$row2 = mysqli_fetch_assoc($result1);
                            ?>
                           
                            <?php $row6 = $row['id_group']; ?>
                            <select name="bakery_group">
                                <option value='0'>กรุณาเลือกชื่อกลุ่ม</option>
                                <?php
                                while ($gpResult = mysqli_fetch_array($result1)) {
                                    ?>
                                <option value='<?php echo $gpResult['id_group']; ?>' <?php if ($row6==$gpResult['id_group'])  echo 'selected';?>>
                                        <?php echo $gpResult['name_group']; ?></option>
                                    <?php } ?> 

                            </select> 
                            <br>

                            <?php
                            $rdo = "";
                            if (isset($row['status_type'])) {
                                $rdo = $row['status_type'];
                            }
                            ?>

                            <br>
                            <input type="submit" id="bt1" class="btn-submit" name="submit"  value="แก้ไข" onClick="alert('ยืนยันการแก้ไข')"> 
                            <input type="reset" id="bt2" class="btn-submit" name="submit" value="ยกเลิก"> 
                            <input type="button" id="bt3" class="btn-submit" name="submit" value="ย้อนกลับ" onclick="window.location = '../bk_type/type_form.php';"> 

                        </td>
                    </tr>
                </table><br>
    </form>

</body>
</html>