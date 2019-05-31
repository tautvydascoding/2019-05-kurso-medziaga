<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
require_once('db_functions.php');
$numeris =1;
$gydytojas = getDoctor( $numeris);
print_r( $gydytojas ); //test




echo $gydytojas["name"] . $gydytojas['name']
?>
  </body>
</html>
