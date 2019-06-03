<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>


        <?php
        require_once('db_functions.php');

         $numeris = $_GET['nr']; // is narsykels URL
         // echo "Numeris: $numeris "; // test

         $gyt = getDoctor($numeris);
        // test
        // print_r($gyt);
        echo $gyt['name'] . " " . $gyt['lname'];
        // arba
        // echo  "   {$gyt['name']}    {$gyt['lname']}   ";
         ?>

    </body>
</html>
