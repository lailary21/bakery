<?php

ob_start();
session_start();
if (isset($_GET["Line"])) {
    $Line = $_GET["Line"];
    $_SESSION["strid_bakery"][$Line] = "";
    $_SESSION["stramount"][$Line] = "";
}
header("location:show.php");
?>
