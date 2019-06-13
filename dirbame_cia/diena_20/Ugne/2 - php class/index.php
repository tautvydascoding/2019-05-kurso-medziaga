<?php
require_once('vilkas.php');

$Vilkas1 = new Vilkas();
echo "Tipas: " . $Vilkas1->$tipas;
echo "Svoris: " . $Vilkas1->$svoris;
// echo "Ligos: " . $Vilkas1->$ligos;
// echo "Pusryciai: " . $Vilkas1->$pusryciai;
$Vilkas1->printLigos();

 ?>
