<?php
/**
 * Created by PhpStorm.
 * User: darknamer
 * Date: 5/9/16
 * Time: 01:27
 */

ob_start();
session_start();

include './connect.php';
require_once '../library/dompdf/autoload.inc.php';

use Dompdf\Dompdf;
//use Dompdf\Options;

//$options = new Options();
//$options->set('defaultFont', 'Helvetica');
//$domPDF = new Dompdf($options);
$domPDF = new Dompdf(['defaultFont' => 'Helvetica']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $start_date = $_POST['startDatePicker'];
  $end_date = $_POST['endDatePicker'];

  $html = "<html><head><title></title></head><body>";
  $html = "<h1>Training DOMPDF</h1>";
  $html = "</body></html>";

  switch ($_POST['report']) {
    // ยอดขายเบเกอรี่
    case 'sale':
      break;
    // เบเกอรี่ขายดี 5 อันดับ
    case 'bakery':

      break;
    // การแสดงความคิดเห็นต่อเบเกอรี่
    case 'comment':

      break;
    default:
      break;
  }

  $domPDF->loadHtml($html);
  $domPDF->setPaper('A4', '0', '');
  $domPDF->stream('report');
  $domPDF->SetAutoFont();
  $domPDF->SetDisplayMode('fullpage');
  $domPDF->WriteHTML($html, 2);
  $domPDF->Output();
}