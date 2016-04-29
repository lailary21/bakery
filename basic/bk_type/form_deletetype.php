<?php
include("../condb/conndb.php");
$name_type = $_GET['name_type']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
$sql1 = "SELECT * FROM bakery_type WHERE name_type = '$name_type'"; //เรียกข้อมูลจากฟอร์มโดยกำหนดเงื่อนไข
$r1 = mysqli_query($conn,
        $sql1);
$row = mysqli_fetch_assoc($r1);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_type'] == 2) {
    echo "<script>alert('ไม่สามารถลบได้เนื่องจากสถานะถูกเปลี่ยนแล้ว!!');history.back();</script>";
     return;
}
mysqli_close($conn);
?>
<html>
    <head>
        <title>ข้อมูลชนิดเบเกอรี่</title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="type_form.css">
    </head>
    <script src="../jquery/jquery-1.12.0.min.js"></script>
        <script>
        $(document).ready(function () {
            $(".delete-btn").click(function () {
                var txt;
                var r = confirm("ต้องการลบข้อมูลใช่หรือไม่!");
                if (r == true) {

                    var spltClass = $(this).attr('class').split(" ");
                    var id_type = spltClass[1];
                    
                    $.post("type_delete.php", {
                        "id_type": id_type
                    },"json");
                    setTimeout(function () {
                      window.location.href = "type_form.php";   
                     }, 1000);
                } else {
                    txt = "You pressed Cancel!";
                    
                }
            });
        });

    </script>
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
                                 
                         <br>
            <table width="500" border="1">
                <tr>
                   <th width="91"><div align="center">รหัส</th>
                    <th width="100"><div align="center">ชื่อเบเกอรี่</th>
                    <th width="100"><div align="center">กลุ่มเบเกอรี่</th>
                    <th width="91"><div align="center">สถานะ</th>
                    
                </tr>
                 </td>
                   
                            <?php
                            $rdo = "";
                            if (isset($row['status_type'])) {
                                $rdo = $row['status_type'];
                            }
                            ?>
 <?php 
        
        include("../condb/conndb.php");
     
        $sql9 = "select * from bakery_type ,bakery_group where bakery_type.id_group=bakery_group.id_group" ;
        $query = mysqli_query($conn, $sql9) or die($sql9);
        while ($typeResult = mysqli_fetch_array($query)) {
        echo "<tr>";     
        echo "<td>" . $typeResult['id_type'] . "</td>";
        echo "<td>" . $typeResult['name_type'] . "</td>"; 
        echo "<td>" . $typeResult['name_group'] . "</td>";
       $status = $typeResult['status_type'];
                                    if($status == "1") {$status = "ใช้งาน";}
                                    else{$status = "ไม่ใช้งาน";}
                                    echo "<td>" . $status . "</td>";
        
        
        echo "<td>"
        ?>
                       <button name="delete" class="delete-btn <?php echo $typeResult['id_type'] ?>" >ลบ</button>
                       <input type="button" id="bt3" class="btn-submit" name="submit" value="ย้อนกลับ" onclick="window.location = '../bk_type/type_form.php';"><?php
                "</td>";
                }
                ?>     
                        
                 </tr>
                </table><br>

    
</body>
</html>

