<!DOCTYPE html>
<html>
    <head>
        <title>การชำระเงิน</title>
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
        <img class="logo-head" src="../image/1.jpg"> 
        <form id="form1" name="form1" method="post" action="">
            <table width="1300" height="200" border="0" align="center"> <!--ตารางใหญ่!-->
                <tr>
                    <td width="1000" >                              
                        <table width="500" border="0" border="center" align="center" bgcolor="#FFFFCC">
                            <tr>
                                <td><br><h1>ข้อมูลการแจ้งชำระเงิน</h1>

                                    <label>เลขที่ใบขาย</label>
                                    <input type="text" id="name_bank" name="name_bank"><br> 

                                    <label>ชื่อผู้ใช้งาน</label>
                                    <input type="text" id="user_mem" name="user_mem"><br> 

                                    <input type="submit" id="bt1" name="submit"  value="submit"> 
                                    <input type="submit" id="bt2" name="submit" value="ยกเลิก"> 
                                    <br><br><br>
                                </td>
                            </tr>
                        </table>
            </table>
        </form>
    </body>
</html>
