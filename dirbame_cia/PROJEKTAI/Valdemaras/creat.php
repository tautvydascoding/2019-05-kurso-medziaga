<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

<link rel="stylesheet" href="css/main.css">

<?php
include_once('db_functions.php');
// print_r($_GET);
$pavadinimas = $_GET['preke'];
$aprasymas = $_GET['aprasymas'];
createPreke( $pavadinimas, $aprasymas);
echo "<a href='administratorius.php'><button>Atgal</button></a>";
 ?>
