<?php
include('db_functions.php');

$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctor($vard, $parv);
?>
<h2> sukuriau <?=  $vard . $parv ?> </h2>
