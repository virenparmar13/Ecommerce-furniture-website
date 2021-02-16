<?php
session_start();
require_once("config.php");
unset($_SESSION["userID"]);
unset($_SESSION["userUID"]);
header("Location:index.php");
// code for removing product from cart
unset($_SESSION["cart_item"]);
?>