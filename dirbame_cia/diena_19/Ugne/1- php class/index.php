<?php
require_once('automobilis.php');

$X5 = new Automobilis();
$X4 = new Automobilis();
$X3 = new Automobilis();
$X2 = new Automobilis();
$X1 = new Automobilis();

$X5->spalva = "Juoda";
$X4->spalva = "Raudona";
$X3->spalva = "Ruda";
echo "Spalva: $X5->spalva";
// echo "Kebulo numeris: $X5->kebulonumeris";

$X5->vaziuoti(5);
 ?>
