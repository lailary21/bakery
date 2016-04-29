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
                <td width="120" align="center">เช็คสถานะ</td>
                <td width="120" align="center">ค้นหา</td>
                <td width="100">สมัครสมาชิก</td>
            </tr>
        </table>
        <tr>
            <td width="200"> 
                <table width="200" border="0" align="left" bgcolor="#F26B5E">    <!--ตารางแถบซ้ายมือ!-->
                    
         
              <table width="700" bgcolor="#FFFFFF" align="center" > 
                    <tr>
                        <td width="300" align="center"> 
        <h1>ตรวจสอบสถานะ</h1>
        
        
            เลขที่ใบขาย:
            <label for="textfield"></label>
              <input type="text" name="textfield" id="textfield" />
              <input type="submit" name="button" id="button" value="ตกลง" onclick="window.location = 'check_form.php';" />
              <table width="800" border="1" align="center"><br>
                <tr>
                <br><br>
                    <th width="121"><div align="center">เลขที่ใบขาย</th>
                    <th width="120"><div align="center">ชื่อสมาชิก</th>
                    <th width="150"><div align="center">วันเวลา</th>
                    <th width="150"><div align="center">ยอดรวม</th>
                    <th width="91"><div align="center">สถานะ</th>
                   
                </tr> 
   
        <?php 
        
        include("../condb/conndb.php");
     
        $sql9 = "select * from bakery, bakery_type ,size_price ,bakery_group where bakery.id_sp=size_price.id_sp AND bakery.id_type=bakery_type.id_type AND bakery_type.id_group=bakery_group.id_group"  ;
        $query = mysqli_query($conn, $sql9) or die($sql9);
        while ($typeResult = mysqli_fetch_array($query)) {
        echo "<tr>"; 
        echo "<td div align='center'>" . $typeResult['id_bakery'] . "</td>";   
        echo "<td div align='center'>" . $typeResult['name_bakery'] . "</td>";  
        echo "<td div align='center'>" . $typeResult['name_group'] . "</td>";
        echo "<td div align='center'>" . $typeResult['name_type'] . "</td>";
        echo "<td div align='center'>" . $typeResult['price_sp'] . "</td>";
        echo "<td div align='center'>" . $typeResult['size_sp'] . "</td>";  ?>
        <td> <img width='120' height='80' border='1'src="../bk_pic/<?php echo $typeResult['photo']; ?>"> </td>
      <?php  echo "<td div align='center'>" . $typeResult['status_bakery'] . "</td>";
        
        echo "<td>"
        ?>
                
                <?php
        echo"<td<center><a href ='form_editbk.php?name_bakery=$typeResult[name_bakery]'>แก้ไข </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//
        echo"<td><center><a href ='form_deletebk.php?name_bakery=$typeResult[name_bakery]'>ลบ </a></center></td>"; //ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล//ลิงค์และส่งค่าข้อูมูลเพื่อทำการลบข้อมูล       
                        } 
         ?>
                
                 </tr>
                </table><br>
    
</body>
</html>