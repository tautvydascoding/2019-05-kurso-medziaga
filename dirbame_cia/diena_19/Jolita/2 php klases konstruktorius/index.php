<?php
require_once('Automobilis.php');

$X5 = new Automobilis(); //sukuriu atskira objekta, ant tos pacios klases remo
$X4 = new Automobilis();
$X3 = new Automobilis();
$X2 = new Automobilis();
$X1 = new Automobilis();


$X5->spalva = "juoda";
$X4->spalva = "pilkas";
$X3->spalva = "baltas";
$X2->spalva = "raudonas";
$X1->spalva = "melynas";

echo "SpalvaX5: $X5->spalva";
echo "SpalvaX4: $X4->spalva";
echo "SpalvaX3: $X3->spalva";
echo "SpalvaX2: $X2->spalva";
echo "SpalvaX1: $X1->spalva";


$X5->vaziuoti(5);


 ?>
