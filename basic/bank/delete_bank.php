<?php
$name_bank = $_GET['name_bank']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
include './connect.php'; //เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล
$sql1 = "SELECT * FROM bank WHERE name_bank = '$name_bank'"; //เรียกข้อมูลจากฟอร์มโดยกำหนดเงื่อนไข
$r1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($r1);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_bank'] == 2) {
    echo "<script>alert ('ไม่สามารถลบได้');history.back();</script>";
}
mysqli_close($conn);
?>
<html>
    <head>
        <title>ข้อมูลธนาคาร</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <script src="../jquery/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $(".delete-btn").click(function () {
                var txt;
                var r = confirm("ต้องการลบข้อมูลใช่หรือไม่!");
                if (r == true) {

                    var spltClass = $(this).attr('class').split(" ");
                    var id_bank = spltClass[1];

                    $.post("b_delete.php", {
                        "id_bank": id_bank
                    }, "json");
                    setTimeout(function () {
                        window.location.href = "bank.php";
                    }, 1000);
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
        <table width="460" border="1" align="center" bgcolor="#FFFFF">
            <tr>
                <th width="79" align="center">รหัส</th>
                <th width="79" align="center">ชื่อธนาคาร</th>
                <th width="100" align="center">ชื่อบัญชี</th>
                <th width="80" align="center">เลขที่บัญชี</th>
                <th width="80" align="center">สาขา</th>
                <th width="75" align="center">สถานะ</th> 
            </tr> 
            <?php
            include './connect.php';
            $sql = "select * from bank";
            $query = mysqli_query($conn, $sql) or die($sql);
            while ($bankResult = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $bankResult['id_bank'] . "</td>";
                echo "<td>" . $bankResult['name_bank'] . "</td>";
                echo "<td>" . $bankResult['accname'] . "</td>";
                echo "<td>" . $bankResult['accnum'] . "</td>";
                echo "<td>" . $bankResult['branch'] . "</td>";
                echo "<td>" . $bankResult['status_bank'] . "</td>";
                echo "<td>"
                ?> <button name="delete" class="delete-btn <?php echo $bankResult['id_bank'] ?>" >ลบ</button><?php
                "</td>";
            }
            ?>
        </table><br></td> </tr>
</table><br>                  
<!--        </form>-->
</body>
</html>

