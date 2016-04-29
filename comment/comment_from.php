
<html>
    <head>
        <title>แสดงความคิดเห็น</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css.css">
        <script src="jquery-1.12.0.min.js" type="text/javascript"></script>
    </head>
    <script></script>
    <style></style>
    <body>      
        <img class="logo-head" src="../image/1.jpg"> 
        <form action="comment.php" method="post">
            <table class="menu-head">                                            <!--แถบข้างบน!-->  
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
            <table width="950" align="center" bgcolor="#FFFFFF">               <!--ตารางสีครีม-->
                <tr>
                    <td>
                        <table width="850" border="1" align="center">           <!--ตารางพรีออร์เดอร์-->
                            <tr>
                                <th width="120" align="center">เลขที่ใบขาย</th>
                                <th width="97" align="center">วัน/เวลา</th>
                                <th width="100" align="center">ชื่อเบเกอรี่</th>
                                <th width="100" align="center">จำนวนชิ้น</th>
                                <th width="100" align="center">ขนาด</th>
                                <th width="80" align="center">ราคา</th>
                            </tr>                             
                            <?php
                            include 'connect.php';
                            $sql = "SELECT * FROM preorder_bakery, preorder_detail, bakery, size_price, bakery_type WHERE preorder_bakery.orderno=preorder_detail.orderno AND preorder_detail.id_bakery=bakery.id_bakery";
                            $query = mysqli_query($conn,
                                    $sql) or die($sql);
                            $proResult = mysqli_fetch_array($query);
                                echo "<tr>";
                                echo "<td align='center'>" . $proResult['orderno'] . "</td>";
                                echo "<td align='center'>" . $proResult['datetime_pre'] . "</td>";
                                echo "<td align='center'>" . $proResult['name_bakery'] . "</td>";
                                echo "<td align='center'>" . $proResult['amount'] . "</td>";
                                echo "<td align='center'>" . $proResult['amount'] . "</td>";
                                echo "<td align='center'>" . $proResult['total'] . "</td>";
                                echo"<td><center><a href ='comment.php?orderno=$proResult[orderno]'>Comment </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//
                            
                            ?>
                        </table><br></td></tr><br><br>
            </table><br>           
        </form>
    </body>
</html>