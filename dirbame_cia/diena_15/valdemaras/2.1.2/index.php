<?php
$preke1 = ['23', 'daiktas', '12'];
$preke2 = ['59.99', 'daiktas2', '3'];
$preke3 = ['49.99', 'daiktas3', '32'];


$numeris = $_GET['x'];
echo "numeris: $numeris <br />";
echo $preke1[$numeris] . "<hr />";

$visosPrekes = [$preke1, $preke2, $preke3];

$numeris = $_GET['x'];
$manoPreke =  $visosPrekes[$numeris];
print_r($manoPreke);
echo "<hr />";
 ?>
