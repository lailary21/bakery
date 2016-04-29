<html>
<head>
  <title>Comment</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="css.css">
  <script type="text/javascript" src="../jquery/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" src="http://momentjs.com/downloads/moment.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $("#datetime_com").val(moment().format('YYYY-MM-DD'));
    });
  </script>
</head>
<body>
<img class="logo-head" src="../image/1.jpg">
<form action="insert.php" method="post">
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
  <table width="800" align="center" bgcolor="#FFFFFF"><!--ตารางใหญ่-->
    <tr>
      <td>
        <table width="700" border="1" align="center"><!--ตารางพรีออร์เดอร์-->
          <tr>
            <th width="100" align="center">เลขที่ใบขาย</th>
            <th width="130" align="center">เบเกอรี่</th>
            <th width="130" align="center">วัน/เวลา</th>
            <th width="300" align="center">คอมเม้น</th>
          </tr>
          <?php
          include 'connect.php';
          $sql = "SELECT * FROM COMMENT, preorder_detail WHERE comment.orderno = preorder_detail.id_order";
          $query = mysqli_query($conn, $sql) or die($sql);
          while ($proResult = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td align='center'>" . $proResult['orderno'] . "</td>";
            echo "<td align='center'>" . (isset($proResult['name_bakery']) ? $proResult['name_bakery'] : null) . "</td>";
            echo "<td align='center'>" . $proResult['datetime_com'] . "</td>";
            echo "<td align='center'>" . $proResult['com_text'] . "</td>";
          }
          ?>
        </table>
        <br>
        <?php
        if (isset($_GET['orderno'])) {
          $sql = "select * " .
              "from preorder_detail as predetail, bakery as bak, preorder_bakery as prebakery, bakery_type as btype " .
              "where predetail.orderno = {$_GET['orderno']} and " .
              "bak.id_bakery = predetail.id_bakery and " .
              "prebakery.orderno = predetail.orderno and btype.id_type = bak.id_type";
          $query = $conn->query($sql) or die($sql);
          $row = $query->fetch_assoc();
          //debugArray($row);
          ?>
          <input type="hidden" name="id_order" value="<?= $row['id_order'] ?>"/>
          <input type="hidden" name="id_bakery" value="<?= $row['id_bakery'] ?>"/>
          <input type="hidden" name="id_type" value="<?= $row['id_type'] ?>"/>
          <input type="hidden" name="id_sp" value="<?= $row['id_sp'] ?>"/>

          <table width="500" align="center" border="0">
            <tr>
              <td height="31" colspan="2" align="center">แสดงความคิดเห็น</td>
            </tr>
            <tr>
              <td align="right">เลขที่ใบสั่งซื้อ :</td>
              <td><input type="text" name="orderno" id="orderno" value="<?= $row['orderno'] ?>" readonly required>
              </td>
            </tr>
            <tr>
              <td align="right">จำนวนชิ้นที่สั่ง :</td>
              <td><input type="text" name="amount" id="amount" value="<?= $row['amount'] ?>" readonly required></td>
            </tr>
            <tr>
              <td align="right">ขนาด :</td>
              <td><input type="text" name="amount" id="amount" value="<?= $row['size'] ?>" readonly required></td>
            </tr>
            <tr>
              <td align="right">เบเกอรี่ :</td>
              <td><input type="text" name="name_bakery" id="name_bakery" value="<?= $row['name_bakery'] ?>" readonly
                         required></td>
            </tr>
            <tr>
              <td align="right">ชนิดเบเกอรี่ :</td>
              <td><input type="text" name="total2" id="total2" value="<?= $row['name_type'] ?>" readonly required>
              </td>
            </tr>
            <tr>
              <td align="right">รายละเอียด :</td>
              <td>
                <textarea id="com_text" name="com_text" rows="7" cols="45" required></textarea>
                <a style="color: red"> *</a>
              </td>
            </tr>
            <tr>
              <td align="right">วันที่ :</td>
              <td>
                <input type="date"
                       id="datetime_com"
                       name="datetime_com" readonly required/>
                <a style="color: red"> *</a></td>
            </tr>
            <tr>
              <td colspan="2" align="center">
                <input type="submit"
                       id="bt1"
                       class="btn-submit"
                       name="submit"
                       value="เพิ่ม">
                <input type="reset"
                       id="bt2"
                       class="btn-reset"
                       name="reset"
                       value="ยกเลิก">
              </td>
            </tr>
          </table>
        <?php } ?>
        <br>
  </table>
  <br></td></tr>
  </table>
  <br>
</form>
</body>
</html>
