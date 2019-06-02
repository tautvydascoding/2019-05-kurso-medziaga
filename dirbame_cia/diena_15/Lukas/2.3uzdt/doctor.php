<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        include('db_functions.php');
        $numeris = $_GET['nr'];
        $gydytojas = getDoctor($numeris);
        // print_r($gydytojas); test
        // echo $gydytojas[1] .  $gydytojas[2] ; blogai uzrasytas, nes masyvas turi vardus
        echo $gydytojas["name"] .  $gydytojas['lname'] ;

        ?>
    </body>
</html>
