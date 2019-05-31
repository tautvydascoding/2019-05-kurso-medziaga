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
          <?php
          // uzduotis 3.1: atspausdinti visas gydytoju pavardes naudojant FOR cikla, kaip list item "ul li"
          echo "==============Visos pavarde===========<br />";
          echo "<ul>";
          for ($i=1; $i < 6; $i++) :
               $gyt = getDoctor($i);
                echo "<li><a href='doctor.php?nr=$i'> " .  $gyt['lname'] . "</a></li>";
         endfor;
          echo "</ul>";
          // uzduotis 3.2: patobulinti 'uzduotis3',
            ?>
    </body>
</html>
