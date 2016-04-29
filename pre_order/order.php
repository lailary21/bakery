<?php
ob_start();
session_start();

if (!isset($_SESSION["intLine"])) {
    $_SESSION["intLine"] = 0;
    $_SESSION["strid_bakery"][0] = $_GET["id_bakery"];
    $_SESSION["stramount"][0] = 1;
    header("location:show.php");
} else {
    $key = array_search($_GET["id_bakery"],
            $_SESSION["strid_bakery"]);
    if ((string) $key != "") {
        $_SESSION["stramount"][$key] = $_SESSION["stramount"][$key] + 1;
    } else {
        $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
        $intNewLine = $_SESSION["intLine"];
        $_SESSION["strid_bakery"][$intNewLine] = $_GET["id_bakery"];
        $_SESSION["stramount"][$intNewLine] = 1;
    }
    header("location:show.php");
}
?>