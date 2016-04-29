<?php
    
    include '../register/connect.php';
    
    if(isset($_SESSION["id_mem"])){
        $name = $_SESSION["user_mem"];
        
    }
    else if(isset($_SESSION["id_owner"])){
            $name = $_SESSION["user_owner"];
            
    }
    else{
        //$name = "guest";
        header("location:../register/login.php");
        //$name = $_SESSION["user_owner"];
    }
    
?>
<html>
    <head>
        <title>ตรวจสอบสถานะ</title>
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
                <tr align="center" bgcolor="#FFFFCC">
                    <td><?php echo $name;?></td>
                </tr>
                <td height="35" style="text-align: center;">จัดการข้อมูลต่างๆ</td>
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
                </tr>
                <tr align="center" bgcolor="#FFCC99">
                            <td><a><span onclick="window.location = '../register/logout.php';" >Logout!!</span></a></td>
                </tr></div>
        </table>

        <table width="700" bgcolor="#FFFFFF" align="center" > 
            <tr>
                <td width="300" align="center"> 

                    <h1>รายการตรวจสอบสถานะ</h1>
                    <br>
                    <table width="550" border="1" align="center">
                        <tr>
                            <th width="150"><div align="center">เลขที่ใบขาย</th>       
                            <th width="150"><div align="center">สถานะผลิต</th>
                            <th width="150"><div align="center">สถานะชำระเงิน</th>
                            <th width="150"><div align="center">สถานะจัดส่ง</th>
                        </tr> 
                        
                        <?php
                        include("../condb/conndb.php");
                        
                       $preorder = $_POST['preorder'];
                       
                       if ((empty($_POST['preorder']))) {
                           echo "<script>alert('กรุณากรอกเลขที่ใบขาย');history.back();</script>";
                       return;
                      }
                      
                       
                        $sql9 = "SELECT orderno FROM preorder_bakery WHERE orderno='$preorder'";
                        $query = mysqli_query($conn,
                               $sql9) or die($sql9);
                        $row = mysqli_fetch_assoc($query);
                       if ($row['orderno'] != $preorder) {
                              echo "<script>alert('เลขที่ใบขายนี้ไม่มี');history.back();</script>";
                               return;
                      }else{
                        
                        $sql19 = "SELECT status_order,status_pay,status_delivery,orderno FROM produce_bakery AS pb, payment AS py ,delivery_bakery AS db
                                  WHERE pb.id_payment = py.id_payment AND pb.id_produce = db.id_produce AND orderno='$preorder'";
                        $query1 = mysqli_query($conn,
                                $sql19) or die($sql19);
                                
                              while($orderstatus = mysqli_fetch_array($query1)){
//                            echo  $orderstatus['orderno'];

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
                        
                                    $status2 = $orderstatus['status_pay'];
                                    if ($status2 == "1") {
                                        $status2 = "ยังไม่ได้ชำระเงิน";
                                    }
                                     else {
                                        $status2 = "ชำระเงินเรียบร้อยแล้ว";
                                    }
                                    echo "<td div align='center'>" . $status2 . "</td>";
                                    
                                     $status3 = $orderstatus['status_delivery'];
                                    if ($status3 == "1") {
                                        $status3 = "ยังไม่ได้จัดส่ง";
                                    }
                                     else {
                                        $status3 = "จัดส่งเรียบร้อยแล้ว";
                                    }
                                    echo "<td div align='center'>" . $status3 . "</td>";    
                        }
                                ?>
                                <?php
                  }
                        ?>

            </tr>
        </table><br>
        <input type="button" id="bt3" class="btn-submit" name="submit" value="ย้อนกลับ" onclick="window.location = '../bk_check/check_form.php';"> 
    </form>
</body>
</html>