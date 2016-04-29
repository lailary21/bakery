<html>
    <head>
        <title>ข้อมูลชนิดเบเกอรี่</title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="type_form.css">
    </head>
    <script src="../jquery/jquery-1.12.0.min.js"></script>
        
    <body>   
        <img class="logo-head" src="../image/logo.jpg"></div>
    <form action="type_add.php" method="post" >

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
             <h1>ชนิดเบเกอรี่</h1>
            ชื่อเบเกอรี่ : 
            <input type="text" id="name_type" name="name_type" maxlength="15"> <br> 
           

            กลุ่มเบเกอรี่ :
            <?php
             include("../condb/conndb.php");
             $sql4 = "SELECT * FROM bakery_group WHERE status_group !=2";
             $result1 = mysqli_query($conn,
                     $sql4);
             
            ?>
            <select name="bakery_group">
                <option value='0'>กรุณาเลือกชื่อกลุ่ม</option>
               <?php
                           while ($gpResult = mysqli_fetch_array($result1))
                           {
               ?>
                <option value='<?php echo $gpResult['id_group']; ?>'>
                <?php echo $gpResult['name_group'];?></option>
                           <?php }?> 
                
            </select> 
            
            <br>
            สถานะ :
            <input type="radio" id="radio1" name="status_type"  value="1"> ใช้งาน
            <input type="radio" id="radio2" name="status_type"  value="2"> ไม่ใช้งาน <br>
            
            <br>
  
                 <input type='submit' id="bt1" class="btn-submit" name='submit' value='เพิ่ม' onClick="alert('ยืนยันการบันทึก')"> 
                 <input type="reset" id="bt2" class="btn-submit" name="submit" value="ยกเลิก"> 
                <br><br><br>
              
            <table width="450" border="1" align="center">
                <tr>
                    
                    <th width="91"><div align="center">รหัส</th>
                    <th width="150"><div align="center">ชื่อเบเกอรี่</th>
                    <th width="150"><div align="center">กลุ่มเบเกอรี่</th>
                    <th width="91"><div align="center">สถานะ</th>
                    
                </tr> 
                
        <?php 
        
        include("../condb/conndb.php");
     
        $sql9 = "select * from bakery_type ,bakery_group where bakery_type.id_group=bakery_group.id_group" ;
        $query = mysqli_query($conn, $sql9) or die($sql9);
        while ($typeResult = mysqli_fetch_array($query)) {
        echo "<tr>"; 
          
        echo "<td>" . $typeResult['id_type'] . "</td>";
        echo "<td>" . $typeResult['name_type'] . "</td>";  
        echo "<td>" . $typeResult['name_group'] . "</td>";  
          $status = $typeResult['status_type'];
                                    if($status == "1") {$status = "ใช้งาน";}
                                    else{$status = "ไม่ใช้งาน";}
                                    echo "<td>" . $status . "</td>";
        
        echo "<td>"
        ?>
                
                <?php
        echo"<td<center><a href ='form_edittype.php?name_type=$typeResult[name_type]'>แก้ไข </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//
        echo"<td><center><a href ='form_deletetype.php?name_type=$typeResult[name_type]'>ลบ </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//ลิงค์และส่งค่าข้อูมูลเพื่อทำการลบข้อมูล       
                        } 
         ?>
                
                 </tr>
                </table><br>
    </form>
</body>
</html>