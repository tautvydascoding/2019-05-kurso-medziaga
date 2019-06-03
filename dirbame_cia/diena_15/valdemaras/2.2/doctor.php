<?php
include('db_functions.php');
$numeris = 1;
$gydytojas = getDoctor( $numeris);

// echo $gydytojas[1] .  $gydytojas[2] ;
echo $gydytojas["name"] .  $gydytojas['lname'] ;
 ?>
