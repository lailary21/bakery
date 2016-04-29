<html>
    <head>
        <title>ข้อมูลเบเกอรี่</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="check.css">
       


    </head>
    <script src="../jquery/jquery-1.12.0.min.js"></script>

    <body>
        <img class="logo-head" src="../image/logo.jpg"></div>
    <table class="menu-head">     
        <tr align="center" valign="middle" bgcolor="#CCFFCC">
            <td width="120" align="center">หน้าแรก</td>
            <td width="120" align="center">ติดต่อเรา</td>
            <td width="120" height="20" align="center">วิธีการสั่งซื้อ</td>
            <td width="120" align="center">แจ้งชำระเงิน</td>
            <td width="120" align="center" onclick="window.location = '../bk_check/check_form.php';">เช็คสถานะ</td>
            <td width="120" align="center">ค้นหา</td>
            <td width="100">สมัครสมาชิก</td>
        </tr>
    </table>

<tr>
    <td width="200"> 
        <table width="200" border="0" align="left" bgcolor="#F26B5E">    <!--ตารางแถบซ้ายมือ!-->
            <tr align="center" bgcolor="#F26B5E">
            <div class="menuleft">
                <td height="35" >จัดการข้อมูลต่างๆ</td>
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
                <tr align="center" bgcolor="#FFCC99">
                    <td><a><span onclick="window.location = '../bk_bakery/bk_form.php';" >ข้อมูลเบเกอรี่</span></a></td>
                </tr>
                <tr align="center" bgcolor="#FFFFCC">
                    <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >Admin</span></a></td>
                </tr>
                <tr align="center" bgcolor="#FFCC99">
                    <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >ข้อมูลธนาคาร</span></a></td>
                </tr>
                <tr align="center" bgcolor="#FFFFCC">
                    <td><a><span onclick="window.location = '../bk_owner/owner_form.php';" >ข้อมูลโปรโมชั่น</span></a></td>
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

        <table width="700" bgcolor="#FFFFFF" align="center" > 
            <tr>
                <td width="300" align="center"> 

                    <h1>สถานะการผลิตเบเกอรี่</h1>
                    <br>
                    <table width="400" border="1" align="center">
                        <tr>
                            <th width="150"><div align="center">เลขที่ใบขาย</th>       
                            <th width="100"><div align="center">สถานะ</th>
                        </tr> 
                        
                        <?php
                        include("../condb/conndb.php");
                        
                            
//                        if ((empty($_POST['preorder'])||empty($_POST['order']))) {
//                           echo "<script>alert('ข้อมูลไม่ครบ');history.back();</script>";
//                        return;
//                       }
                       
                        $preorder = $_GET['preorder'];
                        $order = $_GET['order'];
                        

                        $sql9 = "SELECT * FROM preorder_bakery,preorder_detail,produce_bakery WHERE produce_bakery.id_produce=produce_bakery.id_produce AND preorder_bakery.orderno = preorder_detail.orderno ";
                        $query = mysqli_query($conn,
                                $sql9) or die($sql9);
                        
                        $sql19 = "SELECT * FROM preorder_bakery as po, produce_bakery as pb WHERE po.orderno=$preorder AND pb.status_order=$order";
                        $query1 = mysqli_query($conn,
                                $sql19) or die($sql19);
                        
                        while ($typeResult = mysqli_fetch_array($query)) {
                            if ($preorder != $typeResult['orderno']) {
                                echo "<script>alert('เลขที่ใบขายนี้ไม่มี');history.back();</script>";
                                
                        } else {


                                while ($orderstatus = mysqli_fetch_array($query1)) {


                                    echo "<tr>";
                                    ?>
                                    <?php
                                    echo "<td div align='center'>" . $orderstatus['orderno'] . "</td>";
                                    $status = $orderstatus['status_order'];
                                    if ($status == "1") {
                                        $status = "ยังไม่ได้ผลิต";
                                    }
                                    else if ($status == "2") {
                                        $status = "อยู่ระหว่างการผลิต";
                                    } else {
                                        $status = "ผลิตเสร็จเรียบร้อยแล้ว";
                                    }
                                    echo "<td div align='center'>" . $status . "</td>";
                                }
                        
                                ?>


                                <?php
                            }
                            
                        }
                      
                        
                        
                        ?>

            </tr>
        </table><br>
        <input type="button" id="bt3" class="btn-submit" name="submit" value="ย้อนกลับ" onclick="window.location = '../bk_check/check_form.php';"> 
    </form>
</body>
</html>