<?php
require_once('db_functions.php');

$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctor($vard, $parv);
echo "<div class="alert alert-success" role="alert">
    <strong>Šaunu!</strong> Naujas gydytojas " . $vard . " " . $parv . "sukurtas!</div>";


 ?>
