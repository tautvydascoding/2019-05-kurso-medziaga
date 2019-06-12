<?php
session_start();

$id = $_GET['remove'];
$sessionCart = $_SESSION['cart'];
unset($_SESSION['cart'][$id]);

 ?>
