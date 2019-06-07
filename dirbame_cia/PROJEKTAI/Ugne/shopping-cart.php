<?php
require_once ('db_functions.php');
session_start();

var_dump($_SESSION['cart']);

// $orderItem = implode(',', $_SESSION['cart']);


print_r($_SESSION['cart']);
 ?>
