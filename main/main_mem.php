<?php
    
    include '../register/connect.php';
    
    if(isset($_SESSION["id_mem"])){
        $name = $_SESSION["user_mem"];
        
    }else{
        $name = "guest";
        //$name = $_SESSION["user_owner"];
    }
    
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Bhan Carawan</title>
        <style type="text/css">
            body,td,th {
                color: #000;
            }
            body {
                background-image: url(../image/b.jpg);
            }
            #form1 table tr td table tr td {
                color: #000;
                font-size: 16px;
            }
        </style>
    </head>

    <body>
        <form id="form1" name="form1" method="post" action="">
            <br>
            <table width="1300" height="57" border="0" align="center">
                <tr align="center" align="middle" bgcolor="#CCFFCC">
                    <td width="171" align="center"><a href="main.php">หน้าแรก</a></td>
                    <td width="171" align="center">ติดต่อเรา</td>
                    <td width="171" height="20" align="center">วิธีการสั่งซื้อ</td>
                    <td width="171" align="center"><a href="../paymoney/payment.php">แจ้งชำระเงิน</a></td>
                    <td width="171" align="center"><a href="../bk_check/check_form.php">เช็คสถานะ</td>
                    <td width="171" align="center"><a href="../search/search_form.php">ค้นหา</a></td>
                    <td width="171" align="center"><a href="../register/register_m.php">สมัครสมาชิก</a><br></td>
                </tr>
            </table>
            <table width="1200" align="center">
                <tr>
                    <td width="243" bgcolor="#FFFFCC">
                        <table width="226" align="center">
                            <tr>
                                <td width="218" height="40" align="center">ยินดีต้อนรับ <?php echo $name; ?></a></td>
                            </tr>
                            <tr>
                                <td width="218" height="40" align="center"><a href="../register/logout.php">Logout!!</a></td>
                            </tr>
                                </table>
                        <table width="200" border="0" align="center">
                            <tr align="center" bgcolor="#FF3399">
                                <td height="36">กลุ่มเบเกอรี่</td>
                            </tr>
                            <tr align="center" bgcolor="#FFCCFF">
                                <td height="25">เค้ก</td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td height="25">คัพเค้ก</td>
                            </tr>
                            <tr align="center" bgcolor="#FFCCFF">
                                <td height="25">คุกกี้</td>
                            </tr>
                        </table>
                        <br>
                        <table width="200" border="0" align="center">
                            <tr align="center" bgcolor="#FF3399">
                                <td height="35">ชนิดเบเกอรี่</td>
                            </tr>
                            <tr align="center" bgcolor="#FFCCFF">
                                <td height="25">เค้กกล้วยหอม</td>
                            </tr>
                            <tr align="center" bgcolor="#FFFFCC">
                                <td height="25">คัพเค้กวานิลลา</td>
                            </tr>
                            <tr align="center" bgcolor="#FFCCFF">
                                <td height="25">คุกกี้เนยสด</td>
                            </tr>
                        </table></td>
                    <td width="945" align="center" bgcolor="#FFFFCC"><br>
                        <table width="800" border="0">
                            <h1>< Welcome <?php echo $name; ?> to Bhan Carawan ></h1>
                            <tr>
                                <td><img src="../image/c1.jpg" width="280" height="210" /></td>
                                <td><img src="../image/c2.jpg" width="280" height="210" /></td>
                                <td><img src="../image/c3.jpg" width="280" height="210" /></td>
                            </tr>
                            <tr>
                                <td height="30"><img src="../image/c4.jpg" width="280" height="210" /></td>
                                <td height="30"><img src="../image/c5.jpg" width="280" height="210" /></td>
                                <td height="30"><img src="../image/c6.jpg" width="280" height="210" /></td>
                            </tr>
                        </table>
                        <br>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
