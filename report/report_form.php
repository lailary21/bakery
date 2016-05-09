<?php

include './connect.php';

//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//  $sql = "SELECT datetime FROM preorder_bakery WHERE datetime BETWEEN datetime AND datetime ";
//  $query = mysqli_query($conn, $sql);
//  $result = mysqli_fetch_array($query);
//  $yearnow = date("Y-M-D");
//}

?>
<html>
<head>
  <title>ออกรายงาน</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <script src="../jquery/jquery-1.12.0.min.js" type="text/javascript"></script>

  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
//      $('#report').on('change', function () {
//        if ($('#report').val() == '02' || $('#report').val() == "") {
//          $("#datetimepicker1").attr('disabled', 'disabled');
//          $("#datetimepicker2").attr('disabled', 'disabled');
//        } else {
//          $("#datetimepicker1").removeAttr('disabled', 'disabled');
//          $("#datetimepicker2").removeAttr('disabled', 'disabled');
//        }
//      });
//
//      $("#print").click(function () {
//        if ($("#report").val() == '01') {
//          sale();
//        } else if ($("#report").val() == '02') {
//          bakery();
//        } else if ($("#report").val() == '03') {
//          comment();
//        }
//      });
//    });
//
//    function sale() {
//      var datestart = $("#datetimepicker1").val();
//      var dateend = $("#datetimepicker2").val();
//
//      if (datestart <= dateend) {
//        $.post("./report/sale_report.php", {
//          "datestart": datestart,
//          "dateend": dateend
//        }, function (data) {
//          var myWindowReport = window.open();
//          myWindowReport.document.write(data.html1);
//          $("#datetimepicker2").removeClass("alert-danger");
//        }, "json");
//      } else {
//        $("#datetimepicker2").addClass("alert-danger");
//      }

      var configDatepicker = {
        changeMonth: true,
        changeYear: true,
        dateFormat: 'yy-mm-dd'
      };
      var ui = {
        startDatePicker: $('#startDatePicker'),
        endDatePicker: $('#endDatePicker')
      };
      var controller = {};
      controller.init = function () {
        controller.bindingEvent();
      };
      controller.bindingEvent = function () {
        ui.startDatePicker.datepicker(configDatepicker);
        ui.endDatePicker.datepicker(configDatepicker);
      };
      controller.bindingUI = function () {
        ui = {
          startDatePicker: $('#startDatePicker'),
          endDatePicker: $('#endDatePicker')
        };
      };

      controller.init();
    });
  </script>
  <style>
    .logo-head {
      position: static;
      margin-top: -8px;
      margin-left: -8px;
      margin-right: -8px;
      height: 160px;
      width: 1366px;
    }

    body {
      background-image: url(../image/b.jpg);
    }

    button {
      margin-top: -1.8%;
      margin-left: 70%;
    }
  </style>
</head>
<body>
<!--        <img class="logo-head" width="1340" src="../image/1.jpg"> -->
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
<table width="1300" height="200" border="0" color="#FFFFFF" align="center"> <!--ตารางใหญ่!-->
  <tr>
    <td width="230">
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
          <td><a href="../report/report_form.php">ออกรายงาน</a></td>
        </tr>
      </table>
    <td width="1000">
      <form id="form1"
            name="form1"
            method="post"
            action="action_report.php"
            target="_blank">

        <table width="500"
               border="0"
               border="center"
               align="center"
               bgcolor="#FFFFCC">

          <tr>
            <td colspan="2">
              <h2 height="31" align="center">การออกรายงาน</h2>
            </td>
          </tr>
          <tr>
            <td align="right">ประเภทรายงาน :</td>
            <td>
              <select name="report" required>
                <option value="" selected>----------------กรุณาเลือก-----------------</option>
                <option value="sale">รายงานยอดขายเบกอรี่</option>
                <option value="bakery">รายงานเบเกอรี่ขายดี</option>
                <option value="comment">รายงานแสดงความคิดเห็นต่อเบเกอรี่</option>
              </select>
              <a style="color: crimson"> *</a>
            </td>
          </tr>
          <tr>
            <td align="right">วันที่เริ่มต้น :</td>
            <td>
              <input type="text"
                     required
                     readonly
                     id="startDatePicker"
                     name="startDatePicker"/>
              <a style="color: crimson"> *</a></td>
          </tr>
          <tr>
            <td align="right">วันที่สิ้นสุด :</td>
            <td>
              <input type="text"
                     required
                     id="endDatePicker"
                     name="endDatePicker"
                     readonly/>
              <a style="color: crimson"> *</a></td>
          </tr>
          <tr>
            <td align="center">
            <td>
              <input type="submit"
                     id="print"
                     name="submit"
                     value="submit"/>
              <input type="reset"
                     id="bt2"
                     name="reset"
                     value="cancel"/>
            </td>
          </tr>
        </table>
      </form>

    </td>
  </tr>
</table>
</body>
</html>



