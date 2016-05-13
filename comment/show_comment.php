<html>
    <head>
        <title>Comment</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css.css">
        <script type="text/javascript" src="../jquery/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="http://momentjs.com/downloads/moment.min.js"></script>
        <script type="text/javascript"></script>
    </head>
    <body>
        <img class="logo-head" src="../image/1.jpg">
        <form action="insert.php" method="post">
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
            <table width="1000" align="center" bgcolor="#FFFFFF">        <!--ตารางใหญ่-->
                <tr>
                    <td>
                        <table width="700" border="1" align="center">           <!--ตารางพรีออร์เดอร์-->
                            <tr>
                                <th width="90" align="center">ชื่อเบเกอรี่</th>
                                <th width="100" align="center">วัน/เวลา</th>
                                <th width="330" align="center">คอมเม้น</th>
                            </tr> 
                            <?php
                            include 'connect.php';
                            $sql = "SELECT datetime_com, com_text, name_bakery FROM COMMENT, preorder_detail, bakery WHERE comment.id_bakery AND preorder_detail.id_bakery=bakery.id_bakery AND comment.id_bakery=preorder_detail.id_bakery";
                            $query = mysqli_query($conn, $sql) or die($sql);

                            while ($proResult = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td align='center'>" . $proResult['name_bakery'] . "</td>";
                                echo "<td align='center'>" . $proResult['datetime_com'] . "</td>";
                                echo "<td align='center'>" . $proResult['com_text'] . "</td>";
                            }
                            ?>

                        </table><br></td></tr><tr>
                    <td colspan="2" align="center">
                        <input type="reset" id="bt2" class="btn-reset" name="reset" onclick="window.location = 'comment_from.php';" value="ย้อนกลับ">
                    </td>
                </tr>
            </table>
            <br></td></tr>
            </table>
            <br>
        </form>
    </body>
</html>
