<?php
include("../condb/conndb.php");
$name_group = $_GET['name_group']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
$sql1 = "SELECT * FROM bakery_group WHERE name_group = '$name_group'"; //เรียกข้อมูลจากฟอร์มโดยกำหนดเงื่อนไข
$r1 = mysqli_query($conn,
        $sql1);
$row = mysqli_fetch_assoc($r1);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_group'] == 2) {
    echo "<script>alert('ไม่สามารถลบได้เนื่องจากสถานะถูกเปลี่ยนแล้ว!!');history.back();</script>";
     return;
}
?>

<html>
    <head>
        <title>ข้อมูลกลุ่มเบเกอรี่</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="group_form.css">
    </head>
    <script src="../jquery/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $(".delete-btn").click(function () {
                var txt;
                var r = confirm("ต้องการลบข้อมูลใช่หรือไม่!");
                if (r == true) {

                    var spltClass = $(this).attr('class').split(" ");
                    var id_group = spltClass[1];
                    
                    $.post("group_delete.php", {
                        "id_group": id_group
                    },"json");
                    setTimeout(function () {
                      window.location.href = "group_form.php";   
                     }, 1000);
                } else {
                    txt = "You pressed Cancel!";
                    
                }
            });
        });

    </script>
    <body>   
        <img class="logo-head" src="../image/logo.jpg"></div>
        
        <tr>
            <td width="200">
                <table width="200" border="0" align="left" bgcolor="#F26B5E">    <!--ตารางแถบซ้ายมือ!-->
                    <tr align="center" bgcolor="#F26B5E">
                    <div class="menuleft">
                        <td height="35">จัดการข้อมูลต่างๆ</td>
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
                         
                            <table width="380" border="1">
                                <tr>
                                    <th width="50"><div align="center">รหัส</th></div>
                                    <th width="150"><div align="center">ชื่อกลุ่ม</th></div>
                                    <th width="80"><div align="center">สถานะ</th></div>
                                </tr>
                        </td>
                               <?php
                            $rdo = "";
                            if (isset($row['status_group'])) {
                                $rdo = $row['status_group'];
                            }
                            ?>
                        <?php
                        include("../condb/conndb.php");
                        $sql = "select * from bakery_group";
                        $query = mysqli_query($conn,
                                $sql) or die($sql);
                        while ($groupResult = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>" . $groupResult['id_group'] . "</td>";
                            echo "<td>" . $groupResult['name_group'] . "</td>";
                            $status = $groupResult['status_group'];
                                    if($status == "1") {$status = "ใช้งาน";}
                                    else{$status = "ไม่ใช้งาน";}
                                    echo "<td>" . $status . "</td>";
                            echo "<td>"
                            ?>
                            <button name="delete" class="delete-btn <?php echo $groupResult['id_group'] ?>" >ลบ</button>
                            <input type="button" id="bt3" class="btn-submit" name="submit" value="ย้อนกลับ" onclick="window.location = '../bk_group/group_form.php';"><?php
                "</td>";
                }
                ?>     
                        
                 </tr>
                </table><br>

    </form>
</body>
</html>
