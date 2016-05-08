
<html>
    <head>
        <title>รายงานแสดงความคิดเห็นต่อเบเกอรี่</title>
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
        <img class="logo-head" width="1340" src="../image/1.jpg"> 
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
                                <td>ช้อมูลขนาดและราคา</td>
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
                            <h2 height="35" colspan="2" align="center">รายงานแสดงความคิดเห็นต่อเบเกอรี่มากที่สุด 5 อันดับ (Comment Report)</h2>
                            <tr height="35" align="center" bgcolor="#B8875B" >
<!--                                <th width="270">รหัสใบขาย</th>
                                <th width="370">รหัสแสดงความคิดเห็น</th>
                                <th width="200">วันที่</th>-->
                                <th width="600">รายการ</th>
                                <th width="270">จำนวน</th>
                            </tr>
                            <?php
                            include './connect.php';

                            $sql = "SELECT name_bakery, COUNT(name_bakery) AS Countbk FROM COMMENT, preorder_detail, bakery 
                                WHERE comment.id_bakery AND preorder_detail.id_bakery=bakery.id_bakery 
                                AND comment.id_bakery=preorder_detail.id_bakery 
                                GROUP BY name_bakery ORDER BY COUNT(name_bakery) DESC LIMIT 5";
                            $query = mysqli_query($conn, $sql);
                            while ($r1 = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                //echo "<td align='center'>" . $r1['orderno'] . "</td>";
                                //echo "<td align='center'>" . $r1['id_com'] . "</td>";
                                echo "<td align='center'>" . $r1['name_bakery'] . "</td>";
                                echo "<td align='center'>" . $r1['Countbk'] . "</td>";
                            }
                            ?>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>



