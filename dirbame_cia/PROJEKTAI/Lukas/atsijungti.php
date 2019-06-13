<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['valid']);
unset($_SESSION['timeout']);
session_destroy();
header("Location: index.php");
exit;
?>
