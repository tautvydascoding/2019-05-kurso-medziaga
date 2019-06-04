<?php
require_once('db_functions.php');

$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctor($vard, $parv);
echo "Naujas gydytojas sukurtas!"

 ?>
