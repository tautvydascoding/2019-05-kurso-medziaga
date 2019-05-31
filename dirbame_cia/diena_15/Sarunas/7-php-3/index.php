<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>


        <?php
        require_once('db_functions.php');

        $gyt = getDoctor(4);
        print_r( $gyt );
        // uzduotis 2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra 4

        // uzduotis 3.1: atspausdinti visas gydytoju pavardes naudojant FOR cikla, kaip list item "ul li"
        // uzduotis 3.2: patobulinti 'uzduotis3',

         ?>
         <!-- <p> <?php gyt['name'] ?> </p> -->
         <p> <?php echo $gyt['lname'] . " " .?> </p>


    </body>
</html>
