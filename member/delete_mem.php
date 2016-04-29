<?php
$fname_mem = $_GET['fname_mem']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
$id_mem = $_GET['id_mem'];
include './connect.php'; //เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล
$sql1 = "SELECT * FROM member m , tel_mem t WHERE m.id_mem='$id_mem' AND m.id_mem=t.id_mem";
$r1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($r1);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_mem'] == 2) {
    echo "<script>alert ('ไม่สามารถลบได้');history.back();</script>";
}
mysqli_close($conn);
?>
<html>
    <head>
        <title>ข้อมูลสมาชิก</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head><script src="../jquery/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $(".delete-btn").click(function () {
                var txt;
                var r = confirm("ต้องการลบข้อมูลใช่หรือไม่!");
                if (r == true) {

                    var spltClass = $(this).attr('class').split(" ");
                    var id_mem = spltClass[1];

                    $.post("m_delete.php", {
                        "id_mem": id_mem
                    }, "json");

                    setTimeout(function () {
                        window.location.href = "mem_data.php";
                    }, 900);
                } else {
                    txt = "You pressed Cancel!";
                }
            });
        });

    </script>
    <style>
        .logo-head{
            position: static;
            margin-top: -8px;
            margin-left: -8px;
            height: 152px;
            width: 1366px;
        }
        body{
            background-image: url(../image/b.jpg);
        }
    </style>
    <body>      
        <img class="logo-head" src="../image/1.jpg"> 
        <table width="1020" border="0" align="center" bgcolor="#FFFFF">
            <tr>
                <th width="300"><div align="center">รหัส</th>
                <th width="500"><div align="center">ชื่อ</th>
                <th width="500"><div align="center">นามสกุล</th>
                <th width="100"><div align="center">เพศ</th>
                <th width="2000"><div align="center">ที่อยู่</th>
                <th width="200"><div align="center">เบอร์โทร</th>
                <th width="300"><div align="center">E-mail</th>
                <th width="500"><div align="center">ชื่อผู้ใช้งาน</th>
                <th width="200"><div align="center">สถานะ</th> 
            </tr> 
            <?php
            include './connect.php';
            $sql = "SELECT * FROM member ,tel_mem WHERE member.id_mem=tel_mem.id_mem";
            $query = mysqli_query($conn, $sql) or die($sql);
            while ($memResult = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo '<td align="center">' . $memResult['id_mem'] . '</td>';
                echo '<td align="center">' . $memResult['fname_mem'] . '</td>';
                echo '<td align="center">' . $memResult['lname_mem'] . '</td>';
                echo '<td align="center">' . $memResult['sex_mem'] . '</td>';
                echo '<td align="center">' . $memResult['address_mem'] . '</td>';
                echo '<td align="center">' . $memResult['tel_mem'] . '</td>';
                echo '<td align="center">' . $memResult['email_mem'] . '</td>';
                echo '<td align="center">' . $memResult['user_mem'] . '</td>';
                echo '<td align="center">' . $memResult['status_mem'] . '</td>';
                echo "<td>"
                ?> <button name="delete" class="delete-btn <?php echo $memResult['id_mem'] ?>" >ลบ</button><?php
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table><br>
    </body>
</html>
