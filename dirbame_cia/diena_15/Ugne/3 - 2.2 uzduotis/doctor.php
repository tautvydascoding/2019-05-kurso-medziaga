<?php

require_once('db_functions.php');


$numeris = 2;
$gydytojas = getDoctor( $numeris);

// echo $gydytojas[1] .  $gydytojas[2] ;
echo $gydytojas["name"] .  $gydytojas['lname'] ;

?>
