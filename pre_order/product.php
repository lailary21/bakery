<html>
    <head>
        <title>Show</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
         <link rel="stylesheet" href="bk_form.css">
    </head>
    <body>
        <img class="logo-head" src="../image/logo.jpg"></div>
        <?php
        include 'connect.php';
        ini_set('display_errors',
                1);
        error_reporting(~0);
        if (!$conn) {
            echo $conn->connect_error;
            exit();
        }
        $sql1 = "select * from bakery, bakery_type ,size_price ,bakery_group where bakery.id_sp=size_price.id_sp AND bakery.id_type=bakery_type.id_type AND bakery_type.id_group=bakery_group.id_group";
        $objQuery = mysqli_query($conn,
                $sql1);
        if (!$objQuery) {
            echo $conn->error;
            exit();
        }
        ?>
        <table width="550" align="center" bgcolor="#FFFFCC" border="1">
            <tr>
                <td width="80" align="center">รูป</td>
                <td width="80" align="center">รหัส</td>
                <td width="95" align="center">ชื่อเบเกอรี่</td>
                <td width="82" align="center">ขนาด</td>
                <td width="79" align="center">ราคา</td>
            </tr>
            <?php
            while ($preResult = mysqli_fetch_array($objQuery,
            MYSQLI_ASSOC)) {
                ?>
                <tr>
                    <td align="center"><img width='130'height='90'src="../bk_pic/<?php echo $preResult['photo']; ?>"> </td>
                    <td align="center"><?php echo $preResult["id_bakery"]; ?></td>
                    <td align="center"><?php echo $preResult["name_bakery"]; ?></td>
                    <td align="center"><?php echo $preResult["size_sp"]; ?></td>
                    <td align="center"><?php echo $preResult["price_sp"]; ?></td>
                    <td align="center"><a href="order.php?id_bakery=<?php echo $preResult["id_bakery"]; ?>">Order</a></td>
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