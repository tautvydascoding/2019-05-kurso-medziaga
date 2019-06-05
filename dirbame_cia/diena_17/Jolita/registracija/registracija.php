<?php
require_once('db_functions.php');
//print_r($_GET);
$var = $_GET['vardas'];
$pav = $_GET['pavarde'];
createDoctor("$var", "$pav");


 ?>
<h2>registracija sekminga</h2>
