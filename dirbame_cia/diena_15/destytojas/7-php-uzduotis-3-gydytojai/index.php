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
         print_r(  $gyt ); // test
          ?>
          <!--   uzduotis 2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra 4 -->
          <p>
              <?php  echo  $gyt['name'] . " ". $gyt['lname']   ?>
          </p> 
    </body>
</html>
