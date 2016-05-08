<?php
include './connect.php';
date_default_timezone_set('Asia/Bangkok');
$datenow = date("d/m/Y");

$startdate = $_REQUEST['datestart'];
$enddate = $_REQUEST['dateend'];

$sql = "SELECT pb.orderno, pd.id_bakery, pb.datetime, bk.name_bakery, pd.size, pd.amount, pb.total
        FROM preorder_detail pd, bakery bk, preorder_bakery pb
        WHERE pd.id_bakery = bk.id_bakery AND pd.orderno = pb.orderno AND pb.datetime BETWEEN '$startdate 00:00:00' AND '$enddate 23:59:59'";
        $result = mysqli_query($conn, $sql);
?>
<html>
    <head>
        <title>รายงานยอดขาย</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <style>
        .logo-head{
            position: static;
            margin-top: -8px;
            margin-left: -8px;
            margin-right: -8px;
            height: 160px;
            width: 1366px;
        }
        body{
            background-image: url(../image/b.jpg);
        }
        button{
            margin-top: -1.8%;
            margin-left: 70%;
        }
        table.coll{
            border-collapse: collapse;
        }
    </style>
    <body>
<!--        <img class="logo-head" width="1340" src="../image/1.jpg"> -->
        <form id="form1" name="form1" method="post" action="">
            <table width="1340" height="57" border="0" align="center">
                <tr align="center" align="middle" bgcolor="#CCFFCC">
                    <td width="171" align="center"><a href="../main/main.php">หน้าแรก</a></td>
                    <td width="171" align="center">ติดต่อเรา</td>
                    <td width="171" height="20" align="center">วิธีการสั่งซื้อ</td>
                    <td width="171" align="center"><a href="../paymoney/payment.php">แจ้งชำระเงิน</a></td>
                    <td width="171" align="center">เช็คสถานะ</td>
                    <td width="171" align="center"><a href="../search/search_form.php">ค้นหา</a></td>
                    <td width="171" align="center"><a href="../register/register_m.php">สมัครสมาชิก</a><br></td>
                </tr>
            </table>
            <table width="1300" height="200" border="0" color="#FFFFFF" align="center" bgcolor="#FFFFCC"> <!--ตารางใหญ่!-->
                <tr>
                    <td width="230" >
                        <table width="200" border="0" align="center" bgcolor="#F26B5E">    <!--ตารางแถบซ้ายมือ!-->
                            <tr align="center" bgcolor="#F26B5E">
                                <td height="35">จัดการข้อมูลต่างๆ</td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td bgcolor="#FFCC99"><a href="../owner/own_data.php">ข้อมูลเจ้าของร้าน</a></td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td><a href="../member/mem_data.php">ข้อมูลสมาชิก</a></td>
                            </tr>
                            <tr align="center" bgcolor="#FFCC99">
                                <td bgcolor="#FFCC99">ข้อมูลกลุ่มเบเกอรี่</td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td>ข้อมูลชนิดเบเกอรี่</td>
                            </tr>
                            <tr align="center" bgcolor="#FFCC99">
                                <td>ข้อมูลขนาดและราคา</td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td>Admin</td>
                            </tr>
                            <tr align="center" bgcolor="#FFCC99">
                                <td><a href="../bank/bank.php">ข้อมูลธนาคาร</a></td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td>ข้อมูลโปรโมชั่น</td>
                            </tr>
                            <tr align="center" bgcolor="#FFCC99">
                                <td>ข้อมูลการจัดส่งเบเกอรี่</td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td>รายการสั่งซื้อ</td>
                            </tr>
                            <tr align="center" bgcolor="#FFCC99">
                                <td>ยกเลิกเบเกอรี่</td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td>ยืนยันการชำระเงิน</td>
                            </tr>
                            <tr align="center" bgcolor="#FFCC99">
                                <td>เปลี่ยนสถานะ</td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td><a href="../report/report_form.php">ออกรายงาน</a></td>                      
                            </tr>
                        </table>
                    <td width="1000" >
                        <table class="coll" width="970" border="3" border="center" align="center" bgcolor="#EFEFEF">
                            <h2 height="35" colspan="2" align="center">รายงานยอดขาย (Sale Report)</h2>
                            <div>ประจำช่วงเวลา : '$startdate' ถึง : '$enddate'<br>												
				 วันที่ออกรายงาน : '$datenow'</div>
                            <tr height="35" align="center" bgcolor="#B8875B" >
                                <th width="270">รหัสใบขาย</th>
                                <th width="270">รหัสเบเกอรี่</th>
                                <th width="270">วันที่</th>
                                <th width="750">รายการ</th>
                                <th width="300">ขนาด</th>
                                <th width="350">จำนวนเบเกอรี่</th>
                                <th width="370">จำนวนเงิน</th>
                            </tr>
                            <?php
                            include './connect.php';

                            $sql = "SELECT pb.orderno, pd.id_bakery, pb.datetime, bk.name_bakery, pd.size, pd.amount, pb.total
                                    FROM preorder_detail pd, bakery bk, preorder_bakery pb
                                    WHERE pd.id_bakery = bk.id_bakery AND pd.orderno = pb.orderno";
                            $query = mysqli_query($conn, $sql);
                            
                            while ($r1 = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td align='center'>" . $r1['orderno'] . "</td>";
                                echo "<td align='center'>" . $r1['id_bakery'] . "</td>";
                                echo "<td align='center'>" . $r1['datetime'] . "</td>";
                                echo "<td align='center'>" . $r1['name_bakery'] . "</td>";
                                echo "<td align='center'>" . $r1['size'] . " นิ้ว</td>";
                                echo "<td align='center'>" . $r1['amount'] . " ชิ้น</td>";
                                echo "<td align='center'>" . $r1['total'] . " บาท</td>";
                            }
                            ?>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>


