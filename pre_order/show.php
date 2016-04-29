<?php
session_start();
?>
<html>
    <head>
        <title>Pre Order</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
    </head>
    <body>
        <img class="logo-head" src="../image/logo.jpg"></div>
    </body>
    <?php
    if (!isset($_SESSION["intLine"])) {
        echo "Cart Empty";
        exit();
    }
    include 'connect.php';
    if (!$conn) {
        echo $conn->connect_error;
        exit();
    }
    ?>
    <table width="600"  border="1" align="center">
        <tr>
            <td width="80" align="center">รูป</td>
            <td width="80" align="center">รหัส</td>
            <td width="140" align="center">ชื่อเบเกอรี่</td>
            <td width="82" align="center">จำนวนชิ้น</td>
            <td width="100" align="center">ราคา/ชิ้น</td>
            <td width="82" align="center">ราคารวม</td>
        </tr>
        <?php
        $Total = 0;
        $SumTotal = 0;
        for ($i = 0;
                $i <= (int) $_SESSION["intLine"];
                $i++) {
            if ($_SESSION["strid_bakery"][$i] != "") {
                $strSQL = "SELECT * FROM bakery ,preorder_detail, size_price WHERE id_bakery = '" . $_SESSION["strid_bakery"][$i] . "' ";
                $objQuery = mysqli_query($conn, $strSQL);
                while ($objResult = mysqli_fetch_assoc($objQuery));
                $Total = $_SESSION["stramount"][$i] * $objResult["price_sp"];
                $SumTotal = $SumTotal + $Total;
                ?>
                <tr>
                    <td align="center"><img width='130'height='90'src="../bakery/bk_pic/"<?php echo $objResult['photo']; ?>> </td>
                    <td align="center"><?= $_SESSION["strid_bakery"][$i]; ?></td>
                    <td align="center"><?= $objResult["name_bakery"]; ?></td>
                    <td align="center"><?= $_SESSION["stramount"][$i]; ?></td>
                    <td align="center"><?= $objResult["price_sp"]; ?></td>
                    <td align="center"><?= number_format($Total,2);
                ?></td>
                    <td width="50" align="center"><a href="delete.php?Line=<?= $i; ?>">ลบ</a></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
    Sum Total <?php echo number_format($SumTotal,
                2);
        ?>
    <br><br><a href="product.php">เลือกเบเกอรี่เพิ่ม</a>
    <?php
    if ($SumTotal > 0) {
        ?>
        | <a href="checkout.php">สั่งซื้อ</a>
        <?php
    }
    ?>
<?php
mysqli_close($conn);
?>
</body>
</html>