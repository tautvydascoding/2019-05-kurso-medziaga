<?php
include('db_functions.php');
$nr = $_GET['nr'];
deleteDoctor($nr);
// arba
deleteDoctor($_GET['nr']);

 ?>
