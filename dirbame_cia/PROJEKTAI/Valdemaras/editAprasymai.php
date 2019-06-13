<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

<link rel="stylesheet" href="css/main.css">

<?php
$nr = $_GET['nr'];
print_r($_GET);
include_once('db_functions.php');
$pavadinimas = $_GET['preke'];
$aprasymas = $_GET['aprasymas'];
updateTrumpi($nr, $pavadinimas, $aprasymas);
echo "<a href='administratorius.php'><button class = 'btn-primary'>Atgal</button></a>";
 ?>
