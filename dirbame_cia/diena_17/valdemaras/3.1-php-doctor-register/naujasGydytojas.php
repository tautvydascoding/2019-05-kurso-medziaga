<?php
include('db_functions.php');
$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctor($vard, $parv);
 ?>
<?= $vard. $parv ?>
