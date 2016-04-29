<?php
include './connect.php'; //เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล
$fname_owner = $_GET['fname_owner']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
$id_owner = $_GET['id_owner'];
$sql1 = "SELECT * FROM owner o , tel_owner t WHERE o.id_owner='$id_owner' AND o.id_owner=t.id_owner";
$r1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($r1);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_owner'] == 2) {
    echo "<script>alert ('ไม่สามารถลบได้');history.back();</script>";
}
mysqli_close($conn);
?>
<html>
    <head>
        <title>ข้อมูลเจ้าของร้าน</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head><script src="../jquery/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $(".delete-btn").click(function () {
                var txt;
                var r = confirm("ต้องการลบข้อมูลใช่หรือไม่!");
                if (r == true) {

                    var spltClass = $(this).attr('class').split(" ");
                    var id_owner = spltClass[1];

                    $.post("o_delete.php", {
                        "id_owner": id_owner
                    }, "json");

                    setTimeout(function () {
                        window.location.href = "own_data.php";
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
            $sql = "SELECT * FROM owner, tel_owner WHERE owner.id_owner=tel_owner.id_owner";
            $query = mysqli_query($conn, $sql) or die($sql);
            while ($ownResult = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo '<td align="center">' . $ownResult['id_owner'] . '</td>';
                echo '<td align="center">' . $ownResult['fname_owner'] . '</td>';
                echo '<td align="center">' . $ownResult['lname_owner'] . '</td>';
                echo '<td align="center">' . $ownResult['sex_owner'] . '</td>';
                echo '<td align="center">' . $ownResult['address_owner'] . '</td>';
                echo '<td align="center">' . $ownResult['tel_owner'] . '</td>';
                echo '<td align="center">' . $ownResult['email_owner'] . '</td>';
                echo '<td align="center">' . $ownResult['user_owner'] . '</td>';
                echo '<td align="center">' . $ownResult['status_owner'] . '</td>';
                echo "<td>"
                ?> <button name="delete" class="delete-btn <?php echo $ownResult['id_owner'] ?>" >ลบ</button><?php
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table><br></td> </tr>
</table><br>                  
<!--        </form>-->

</body>
</html>
