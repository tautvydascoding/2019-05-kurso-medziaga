<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
    <?php
require_once('vilkas.php');
    //objekto kurimas
    $Vilkas1 = new Vilkas();

echo "tipas: ". $Vilkas1->tipas. "<br/>";
//echo "pusryciai: ". $Vilkas1->pusryciai; nepasiekia
//echo "ligos: ". $Vilkas1->ligos;
echo "svoris: ". $Vilkas1->svoris;
$Vilkas1->printLigos();
$Vilkas1->printPusryciai();



     ?>
    </body>
</html>
