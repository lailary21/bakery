<?php
$pro_name = $_GET['pro_name']; //รับค่าGETที่ส่งมาจากไฟล์โชว์
require_once("connect.php"); //เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล

$sql1 = "SELECT * FROM promotion WHERE pro_name = '$pro_name'"; //เรียกข้อมูลจากฟอร์มโดยกำหนดเงื่อนไข
$r1 = mysqli_query($conn,
        $sql1);
$row = mysqli_fetch_assoc($r1);  //ดึงข้อมูลขึ้นมาแสดงเพื่อจะแก้ไข
if ($row['status_pro'] == 2) {
    echo "<script>alert('ไม่สามารถลบได้');history.back();</script>";
}
?>
<html>
    <head>
        <title>ข้อมูลโปรโมชั่น</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css.css">
    </head>
    <script src="jquery-1.12.0.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $(".delete-btn").click(function () {
                var txt;
                var r = confirm("ต้องการลบข้อมูลใช่หรือไม่!");
                if (r == true) {
                    var spltClass = $(this).attr('class').split(" ");
                    var id_pro = spltClass[1];

                    $.post("savedel.php", {
                        "id_pro": id_pro
                    }, "json");
                    setTimeout(function () {
                        window.location.href = "promotion.php";
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
            background-image: url(image/bg.jpg);
        }
    </style>
    <body>      
        <img class="logo-head" src="image/1.jpg"> 
        <table width="990" border="1" align="center" bgcolor="#FFFFF">
            <tr>
                <th width="79" align="center">รหัส</th>
                <th width="140" align="center">ชื่อโปรโมชั่น</th>
                <th width="170" align="center">รายละเอียด</th>
                <th width="85" align="center">วันที่</th>
                <th width="100" align="center">ราคาเริ่มต้น</th>
                <th width="110" align="center">ราคาสิ้นสุด</th>
                <th width="100" align="center">ส่วนลด(%)</th>
                <th width="75" align="center">สถานะ</th> 
            </tr> 
            <?php
            include 'connect.php';
            $sql = "select * from promotion where id_pro and pro_name='$pro_name'";
            $query = mysqli_query($conn,
                    $sql) or die($sql);
            while ($proResult = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td align='center'>" . $proResult['id_pro'] . "</td>";
                echo "<td align='center'>" . $proResult['pro_name'] . "</td>";
                echo "<td align='center'>" . $proResult['pro_descrip'] . "</td>";
                echo "<td align='center'>" . $proResult['initial_date_pro'] . "</td>";
                echo "<td align='center'>" . $proResult['start_price'] . "</td>";
                echo "<td align='center'>" . $proResult['end_price'] . "</td>";
                echo "<td align='center'>" . $proResult['percent'] . "</td>";
                $status = $proResult['status_pro'];
                if ($status == "1") {
                    $status = "ใช้งาน";
                } else {
                    $status = "ไม่ใช้งาน";
                }
                echo "<td align='center'>" . $status . "</td>";
                echo "<td>"
                ?> <button name="delete" class="delete-btn <?php echo $proResult['id_pro'] ?>" >ลบ</button><?php
                "</td>";
            }
            ?>
        </table><br></td> </tr>
</table><br>                  
<!--        </form>-->

</body>
</html>
