<?php

require_once('Automobilis.php');
$X5 = new  Automobilis();
$X4 = new  Automobilis();
$X3 = new  Automobilis();
$X2 = new  Automobilis();
$X1 = new  Automobilis();


echo "Spalva:  $X5->spalva   <BR />";
$X5->spalva = "Juoda";
$X4->spalva = "Pilkas";
$X3->spalva = "Raudonas";
echo "Spalva:  $X5->spalva  <BR />";
echo "Spalva:  $X4->spalva <BR />";
echo "Spalva:  $X3->spalva <BR />";
//echo "kebuloNumeris:  $X5->kebuloNumeris";

echo "<br />";
$X5->vaziuoti(5);

 ?>
