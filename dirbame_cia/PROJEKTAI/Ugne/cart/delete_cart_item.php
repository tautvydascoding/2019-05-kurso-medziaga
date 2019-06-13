<?php
session_start();

$id = $_POST['id'];
$sessionCart = $_SESSION['cart'];

if(in_array($id, $sessionCart)){
$delete = array_search($id, $sessionCart);
unset($_SESSION['cart'][$delete]);
header("Location: ..\cart.php?id=5");
}



 ?>
