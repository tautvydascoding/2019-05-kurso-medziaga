<?php
require_once('zmogus.php');

$Monika = new Zmogus();
$Tadas = new Zmogus();
$Kestas = new Zmogus();


$Monika->vardas = "Monika";
$Monika->ugis = "155";

$Tadas->vardas = "Tadas";
$Tadas->ugis = 180;

$Kestas->vardas = "Kestas";
$Kestas->ugis = 179;

// Atspausdinti MONIKOS, TADO varda ir ugi
// paleisti f-ja 'einu()'
echo "$Monika->vardas, Ugis: $Monika->ugis; <br />";
echo "$Tadas->vardas, Ugis: $Tadas->ugis; <br />";
$Monika->einu();
 ?>
