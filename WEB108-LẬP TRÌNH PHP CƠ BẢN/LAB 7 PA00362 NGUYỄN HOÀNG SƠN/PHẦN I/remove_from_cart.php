<?php
session_start();
if (isset($_GET["index"])) {
    $index = (int)$_GET["index"];
    if (isset($_SESSION["cart"][$index])) {
        unset($_SESSION["cart"][$index]);
        $_SESSION["cart"] = array_values($_SESSION["cart"]); // reset lại chỉ số
    }
}
header("Location: view_cart.php");
exit;
