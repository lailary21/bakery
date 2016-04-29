<html>
    <head>
        <title>สมัครสมาชิก (เจ้าของร้าน)</title>
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
    </style>
    <body>
        <img class="logo-head" width="1340" src="../image/1.jpg"> 
        <form id="form1" name="form1" method="post" action="so_register.php">
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
            <table width="1300" height="200" border="0" align="center"> <!--ตารางใหญ่!-->
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
                                <td>ออกรายงาน</td>                        
                            </tr>
                        </table>
                    <td width="1000" >                              
                        <table width="500" border="0" border="center" align="center" bgcolor="#FFFFCC">
                            <tr>
                                <td height="31" colspan="2">REGISTER (Owner)</td>
                            </tr>
                            <tr>
                                <td align="right">ชื่อ : </td>
                                <td><input type="text" id="fname_owner" name="fname_owner"><a style="color: crimson"> *</a></td>
                            </tr>
                            <tr>
                                <td align="right">นามสกุล : </td>
                                <td><input type="text" id="lname_owner" name="lname_owner"><a style="color: crimson"> *</a></td> 
                            </tr>
                            <tr>
                                <td align="right">เพศ : </td>
                                <td><input name="sex_owner" id="male" type="radio" value="ชาย"> ชาย
                                    <input name="sex_owner" id="female" type="radio" value="หญิง"> หญิง<a style="color: crimson"> *</a></td>
                            </tr>
                            <tr>
                                <td align="right">ที่อยู่ : </td>
                                <td><input textarea name="address_owner" rows="5" id="address_owner"><a style="color: crimson"> *</a></td> 
                            </tr>
                            <tr>
                                <td align="right">เบอร์โทร : </td>
                                <td><input type="text" id="tel_owner" name="tel_owner"><a style="color: crimson"> *</a></td> 
                            </tr>
                            <tr>
                                <td align="right">E-mail : </td>
                                <td><input type="text" id="email_owner" name="email_owner" placeholder="simple@email.com"><a style="color: crimson"> *</a></td> 
                            </tr>
                            <tr>
                                <td align="right">ชื่อผู้ใช้งาน : </td>
                                <td><input type="text" id="user_owner" name="user_owner"><a style="color: crimson"> *</a></td> 
                            </tr>
                            <tr>
                                <td align="right">รหัสผ่าน : </td>
                                <td><input type="password" id="passwd_owner" name="passwd_owner"><a style="color: crimson"> *</a></td> 
                            </tr>
                            <tr>
                                <td align="right">ยืนยันรหัสผ่าน : </td>
                                <td><input type="password" id="repass_owner" name="repass_owner"><a style="color: crimson"> *</a></td> 
                            </tr>
                            <tr>
                                <td align="center" colspan="2"><input type="submit" id="bt1" name="submit"  value="submit"> 
                                    <input type="reset" id="bt2" name="reset" value="ยกเลิก">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </table>
    </form>
</body>
</html>

