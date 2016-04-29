<html>
    <head>
        <title>เข้าสู่ระบบ</title>
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
        <form id="form1" name="form1" method="post" action="login_ownservice.php">
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
                    <td width="230">
                           
                        
                    <td width="1000" >                              
                        <table width="500" border="0" border="center" align="center" bgcolor="#FFFFCC">
                            <tr>
                                <td height="31" colspan="2" style="text-align: center;">เข้าสู่ระบบ</td>
                            </tr>
                            <tr>
                                <td align="right">ชื่อผู้ใช้งาน : </td>
                                <td><input type="text" id="user_owner" name="user_owner"></td>
                            </tr>
                            <tr>
                                <td align="right">รหัสผ่าน : </td>
                                <td><input type="password" id="passwd_owner" name="passwd_owner"></td>
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
