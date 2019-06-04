<?php



//
require_once('db_functions.php');
print_r( $_GET );
$vard = $_GET['vardas'];
$pard = $_GET['pavarde'];

createDoctor($vard, $pard);
?>

<h2>Gydytojas issaugotas DB-je</h2>
