<html>
    <head>
        <title>รายการเบเกอรี่</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="bk_product.css">
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
        
         
              <table width="700" bgcolor="#FFFFFF" align="center" > 
                    <tr>
                        <td width="300" align="center"> 
        <h1>รายการเบเกอรี่</h1>
        
        
        <form action="bk_order.php" method="post">
        
                
                <table width="550" border="1" align="center">
                <tr>
                     <th width="91"><div align="center">รูปภาพ</th>
                    
                    <th width="91"><div align="center">รหัส</th>
                    <th width="120"><div align="center">ชื่อเบเกอรี่</th>
                
                    <th width="91"><div align="center">ราคา</th>
                    <th width="91"><div align="center">ขนาด</th>
                    <th width="42"><div align="center"><img width="30" src="../image/cart.gif"></th>
                   
                </tr> 
   
        <?php 
        
        include("../condb/conndb.php");
    
        $sql9 = "select * from bakery, bakery_type ,size_price ,bakery_group where bakery.id_sp=size_price.id_sp AND bakery.id_type=bakery_type.id_type AND bakery_type.id_group=bakery_group.id_group"  ;
        $query = mysqli_query($conn, $sql9) or die($sql9);
        while ($typeResult = mysqli_fetch_array($query)) {
        echo "<tr>"; ?>
         <td> <img width='120' height='80' border='1'src="../bk_pic/<?php echo $typeResult['photo']; ?>"> </td><?php
        echo "<td div align='center'>" . $typeResult['id_bakery'] . "</td>";   
        echo "<td div align='center'>" . $typeResult['name_bakery'] . "</td>";  
     
        echo "<td div align='center'>" . $typeResult['price_sp'] . "</td>";
        echo "<td div align='center'>" . $typeResult['size_sp'] . "</td>";  ?>
       
      <?php  
        
        echo "<td>"
        ?>
                
               
        
       <input type="text" name="txtamount"  size="3" placeholder="ใส่จำนวน"> 
             <?php
                        } 
         ?>
                
                 </tr>
                </table><br>
    
      <input  type="submit" id="bt1" name="bt1"  value="สั่งซื้อ"  onclick="window.location = '../bk_cart/bk_order.php'; " >
       <input type="reset" id="bt2" class="btn-submit" name="bt2" value="ยกเลิก"> 
     <?php
        mysqli_close($conn);
        ?>
        </form>
</body>
</html>