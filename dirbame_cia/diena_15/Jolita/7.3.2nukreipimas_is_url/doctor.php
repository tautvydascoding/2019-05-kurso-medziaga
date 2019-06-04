<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
        include('db_functions.php');
        // print_r($_GET); // test
        $sk = $_GET['nr'];
        $gydytojas = getDoctor( $sk );
        echo "Asmeninis gydytojo puslapis: <hr />";
        echo "<h1>" .  $gydytojas['name'] . $gydytojas['lname'] .  "</h1>";
         ?>
    </body>
</html>
