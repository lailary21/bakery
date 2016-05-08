<?php 
//include 'connect.php';
//session_start();
//if (isset($_SESSION["id_owner"])) {
//    $name = $_SESSION["user_owner"];
//} else {
    //$name = "guest";
//    echo "<script>alert('กรุณาเข้าสู่ระบบ')</script>";
//    header("location:../register/login_own.php");
    //$name = $_SESSION["user_owner"];
//}
?>
<?php
include 'connect.php';
?>
<html>
    <head>
        <title>จัดทำโปรโมชั่น</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css.css">

        <script src="jquery-1.12.0.min.js" type="text/javascript"></script>
        <script>
            function OnlyNum() {
                if ((event.keyCode < 48 || event.keyCode > 57)) {
                    alert('ใส่ตัวเลขได้เท่านั้น');
                    event.returnValue = false;
                }
            }
        </script>
    </head>
    <body>      
        <img class="logo-head" src="image/1.jpg"> 
        <form action="callpro.php" method="post">
            <table class="menu-head">                                            <!--แถบข้างบน!!-->  
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
            <table width="200" border="0" align="left" bgcolor="#F26B5E">        <!--ตารางแถบซ้ายมือ!!-->
                <tr align="center" bgcolor="#F26B5E">
                <div class="menuleft">
                    <tr>
<!--                        <td width="218" height="40" align="center">ยินดีต้อนรับ <?php echo $name; ?></a></td>-->
                    </tr>
                    <tr>
                        <td width="218" height="40" align="center"><a href="../register/logout.php">Logout!!</a></td>
                    </tr>
                    <tr>
                        <td align="center" height="35" >จัดการข้อมูลต่างๆ</td>
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
                        <td><a><span onclick="window.location = '../bk_sp/sp_form.php';" >ข้อมูลขนาดและราคา</span></a></td>
                    </tr>
                    <tr align="center" bgcolor="#FFFFCC">
                        <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >Admin</span></a></td>
                    </tr>
                    <tr align="center" bgcolor="#FFCC99">
                        <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >ข้อมูลธนาคาร</span></a></td>
                    </tr>
                    <tr align="center" bgcolor="#FFFFCC">
                        <td><a><span onclick="window.location = '../cal_pro/cal_pro.php';" >ข้อมูลโปรโมชั่น</span></a></td>
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
            <table width="800" align="center" bgcolor="#FFFFFF">               <!--ตารางสีครีม-->
                <tr>
                    <td>
                        <table width="700" border="1" align="center">           <!--ตารางพรีออร์เดอร์-->
                            <tr>
                                <th width="120" align="center">เลขที่ใบสั่งซื้อ</td>
                                <th width="97" align="center">วัน/เวลา</td>
                                <th width="82" align="center">จำนวนชิ้น</td>
                                <th width="100" align="center">ราคาค่าจัดส่ง</td>
                                <th width="100" align="center">ส่วนลด (บาท)</td>
                                <th width="90" align="center">ราคารวม</td>
                            </tr>                             
                            <?php
                            $sql = "select * from preorder_bakery";
                            $query = mysqli_query($conn, $sql) or die($sql);
                            while ($proResult = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td align='center'>" . $proResult['orderno'] . "</td>";
                                echo "<td align='center'>" . $proResult['datetime_pre'] . "</td>";
                                echo "<td align='center'>" . $proResult['amount_piece'] . "</td>";
                                echo "<td align='center'>" . $proResult['deliver_price'] . "</td>";
                                echo "<td align='center'>" . $proResult['pct'] . "</td>";
                                echo "<td align='center'>" . $proResult['total'] . "</td>";
                            }
                            ?>
                        </table><br><br><br><br></td> </tr>

                <tr>
                    <td>
                        <table width="600" border="1" align="center">           <!--ตารางโปรโมชัน-->
                            <tr>
                                <th width="100" align="center">ชื่อโปรโมชั่น</th>
                                <th width="100" align="center">รายละเอียด</th>
                                <th width="85" align="center">วันที่</th>
                                <th width="85" align="center">ราคาเริ่มต้น</th>
                                <th width="85" align="center">ราคาสิ้นสุด</th>
                                <th width="60" align="center">ส่วนลด(%)</th>

                            </tr>  

                            <?php
                            $sql = "select * from promotion";
                            $query = mysqli_query($conn, $sql) or die($sql);
                            while ($proResult = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td align='center'>" . $proResult['pro_name'] . "</td>";
                                echo "<td align='center'>" . $proResult['pro_descrip'] . "</td>";
                                echo "<td align='center'>" . $proResult['initial_date_pro'] . "</td>";
                                echo "<td align='center'>" . $proResult['start_price'] . "</td>";
                                echo "<td align='center'>" . $proResult['end_price'] . "</td>";
                                echo "<td align='center'>" . $proResult['percent'] . "</td>";
                            }
                            ?> 
                        </table>
                        <br>
                </tr>
                <!--<form action="callpro_1.php" method="post">-->

                <tr>

                    <td>
                        <table width="300" border="0.5" align="center">
                            <tr>
                                <td colspan="3" align="center"><h3>คำนวณโปรโมชัน</h3></td>
                            </tr>
                            <tr>
                                <td width="110" align="right">เลขที่ใบสั่งซื้อ :</td>
                                <td colspan="2">
                                    <input type="text" id="orderno" name="orderno" maxlength="9" onkeypress="OnlyNum()"></td>
                            </tr>
                            <tr>
                                <td align="right">ราคารวม :</td>
                                <td colspan="2">
                                    <input type="text" name="total1" id="total1" onkeypress="OnlyNum()"></td>
                            </tr>
                            <tr>
                                <td align="right">ส่วนลด :</td>
                                <td colspan="2">
                                    <input type="text" name="total2" id="total2" onkeypress="OnlyNum()"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2">
                                    <input type="submit" name="submit" id="submit" value="คำนวน">
                                    <input type="reset" name="reset" id="reset" value="ยกเลิก"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!--</form>-->
                <?php
                if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
                    //debugArray($_POST);
                    $total1 = $_POST['total1'];
                    $total2 = $_POST['total2'];

                    if ($total1 && $total2) {
                        echo cal_pro($total1, $total2);
                    } else {
                        echo "<script>alert('กรุณากรอกให้ครบ')</script>";
                    }
                }
                ?>
            </table>         
        </form>
    </body>
</html>