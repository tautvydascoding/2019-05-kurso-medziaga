<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php


        require_once('vilkas.php');

        $vilkas= new Vilkas();
        echo "tipas".$vilkas->tipas ."<br/>";
        echo "tipas".$vilkas->svoris."<br/>";
        // echo "tipas".$vilkas->pusryciai."<br/>";
        // echo "tipas".$vilkas->ligos."<br/>";

        $vilkas->printLigos();
        $vilkas->printPusryciai();

         ?>


    </body>
</html>
