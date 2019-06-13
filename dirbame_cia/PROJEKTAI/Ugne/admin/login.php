<?php
require_once('..\db_functions.php');

$password = $_POST['password'];
$email = $_POST['email'];
loginToAdmin($email, $password);
print_r($password);
print_r($email);
 ?>
