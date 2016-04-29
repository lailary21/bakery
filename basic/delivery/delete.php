<?php
$name_rate = $_GET['name_rate']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
require_once("connect.php"); //เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล

$sql1 = "SELECT * FROM deliver_rate WHERE name_rate = '$name_rate'"; //เรียกข้อมูลจากฟอร์มโดยกำหนดเงื่อนไข
$r1 = mysqli_query($conn,
        $sql1);
$row = mysqli_fetch_assoc($r1);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_rate'] == 2) {
    echo "<script>alert('ไม่สามารถลบได้');history.back();</script>";
}
?>
<html>
    <head>
        <title>ข้อมูลอัตราค่าจัดส่ง</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <script src="jquery-1.12.0.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $(".delete-btn").click(function () {
                var txt;
                var r = confirm("ต้องการลบข้อมูลใช่หรือไม่!");
                if (r == true) {

                    var spltClass = $(this).attr('class').split(" ");
                    var id_rate = spltClass[1];

                    $.post("savedel.php", {
                        "id_rate": id_rate
                    }, "json");
                    setTimeout(function () {
                        window.location.href = "delivery.php";
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
            background-image: url(bg.jpg);
        }
    </style>
    <body>      
        <img class="logo-head" src="1.jpg"> 
        <table width="450" border="1" align="center" bgcolor="#FFFFF">
            <tr>
                <th width="79" align="center">รหัส</th>
                <th width="100" align="center">ชื่อ</th>
                <th width="80" align="center">ราคา</th>
                <th width="75" align="center">สถานะ</th> 
            </tr> 
            <?php
            include 'connect.php';
            $sql = "select * from deliver_rate";
            $query = mysqli_query($conn,
                    $sql) or die($sql);
            while ($proResult = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td align='center'>" . $proResult['id_rate'] . "</td>";
                echo "<td align='center'>" . $proResult['name_rate'] . "</td>";
                echo "<td align='center'>" . $proResult['rate_price'] . "</td>";
                $status = $proResult['status_rate'];
                if ($status == "1") {
                    $status = "ใช้งาน";
                } else {
                    $status = "ไม่ใช้งาน";
                }
                echo "<td align='center'>" . $status . "</td>";
                echo "<td>"
                ?> <button name="delete" class="delete-btn <?php echo $proResult['id_rate'] ?>" >ลบ</button><?php
                "</td>";
            }
            ?>
        </table><br></td> </tr>
</table><br>                  
<!--        </form>-->

</body>
</html>
