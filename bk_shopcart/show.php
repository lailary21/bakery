<?php
session_start();
?>
<html>
    <head>
        <title>Pre Order</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <?php
    if (!isset($_SESSION["intLine"])) {
        echo "Cart Empty";
        exit();
    }
    include("../condb/conndb.php");
    if (!$conn) {
        echo $conn->connect_error;
        exit();
    }
    ?>
    <table width="400"  border="1">
        <tr>
            <td width="80" align="center">รูป</td>
            <td width="80" align="center">รหัส</td>
            <td width="95" align="center">ชื่อเบเกอรี่</td>
            <td width="82" align="center">ขนาด</td>
            <td width="79" align="center">ราคา</td>
        </tr>
        <?php
        $Total = 0;
        $SumTotal = 0;
        for ($i = 0;
                $i <= (int) $_SESSION["intLine"];
                $i++) {
            if ($_SESSION["strid_bakery"][$i] != "") {
                $strSQL = "SELECT * FROM product WHERE id_bakery = '" . $_SESSION["strid_bakery"][$i] . "' ";
                $objQuery = mysqli_query($conn,
                        $strSQL);
                $objResult = $objResult = mysqli_fetch_array($objQuery,
                        MYSQLI_ASSOC);
                $Total = $_SESSION["strQty"][$i] * $objResult["Price"];
                $SumTotal = $SumTotal + $Total;
                ?>
                <tr>
                    <td><?= $_SESSION["strid_bakery"][$i]; ?></td>
                    <td><?= $objResult["name_bakery"]; ?></td>
                    <td><?= $objResult["price_sp"]; ?></td>
                    <td><?= $_SESSION["strQty"][$i]; ?></td>
                    <td><?= number_format($Total,
                        2);
                ?></td>
                    <td><a href="delete.php?Line=<?= $i; ?>">x</a></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
    Sum Total <?php echo number_format($SumTotal,
                2);
        ?>
    <br><br><a href="product.php">Go to Product</a>
    <?php
    if ($SumTotal > 0) {
        ?>
        | <a href="checkout.php">CheckOut</a>
        <?php
    }
    ?>
<?php
mysqli_close($conn);
?>
</body>
</html>