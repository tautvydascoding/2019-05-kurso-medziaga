<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
require_once('db_functions.php');

$numeris =$_GET['nr'];
echo "Numeris: ($numeris)";

$gyt = getDoctor( $numeris);

print_r( $gyt); //test




echo $gydytojas["name"] . $gydytojas['name']
?>
  </body>
</html>
