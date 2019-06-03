<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>


        <?php
        require_once('db_functions.php');

        $numeris = 1;  // norimo gydytojo is DB numeris (id)
        $gydytojas = getDoctor( $numeris);
        // print_r( $gydytojas );// test

        // isvedimas i ekrana
        // echo $gydytojas[1] .  $gydytojas[2] ;
        echo $gydytojas["name"] .  $gydytojas['lname'] ;

         ?>

    </body>
</html>
