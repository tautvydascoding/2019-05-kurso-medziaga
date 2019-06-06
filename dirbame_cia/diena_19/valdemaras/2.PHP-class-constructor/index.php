<?php

require_once('Automobilis.php');
$X5 = new Automobilis();
$X4 = new Automobilis();
$X3 = new Automobilis();
$X2 = new Automobilis();
$X1 = new Automobilis();


$X5->spalva = "Juoda";
$X4->spalva = "Pilkas";
$X3->spalva = "Raudonas";

echo "Spalva: $X5->spalva <br />";
echo "Spalva: $X4->spalva <br />";
echo "Spalva: $X3->spalva <br />";
// echo "KebuloNumeris: $X5->kebuloNumeris";
echo "<br />";
$X5->vaziuoti(5);
 ?>
