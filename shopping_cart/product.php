<html>
    <head>
        <title>Pre Order</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <?php
    include 'connect.php';
    ini_set('display_errors',
            1);
    error_reporting(~0);
    if (!$conn) {
        echo $conn->connect_error;
        exit();
    }
    $strSQL = "SELECT * FROM product";
    $objQuery = mysqli_query($conn,
            $strSQL);
    if (!$objQuery) {
        echo $conn->error;
        exit();
    }
    ?>
    <table width="327" align="center" bgcolor="#FFFFCC">
        <tr>
            <td width="101">Picture</td>
            <td width="101">ProductID</td>
            <td width="82">ProductName</td>
            <td width="79">Price</td>
            <td width="37">Cart</td>
        </tr>
        <?php
        while ($objResult = mysqli_fetch_array($objQuery,
        MYSQLI_ASSOC)) {
            ?>
            <tr>
                <td><img src="img/<?php echo $objResult["Picture"]; ?>"></td>
                <td><?php echo $objResult["ProductID"]; ?></td>
                <td><?php echo $objResult["ProductName"]; ?></td>
                <td><?php echo $objResult["Price"]; ?></td>
                <td><a href="order.php?ProductID=<?php echo $objResult["ProductID"]; ?>">Order</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br><br><a href="show.php">View Cart</a> | <a href="clear.php">Clear Cart</a>
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>