<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php
    // array / masyvas
    $prek1 = [69.99, "Kede", "3vnt"];


    $numeris = $_GET['x'];
    echo "numeris: $numeris <br />";
    echo $preke1[$numeris] . "<hr />";

    $prek2 = [130.99, "Stalas", "1vnt"];
    $prek3 = [50.00, "Lova", "1vnt"];
    $visosPrekes = [$prek1, $prek2, $prek3 ];
    //print_r($visosPrekes);//tst
    $numeris = $_GET['x'];
    $manoPreke =  $visosPrekes[$numeris];
    print_r($manoPreke);
    echo "<hr />";

     ?>

  </body>
</html>
