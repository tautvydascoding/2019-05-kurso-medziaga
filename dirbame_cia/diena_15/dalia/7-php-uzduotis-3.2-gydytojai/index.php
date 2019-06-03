<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1> Kauno Klinikos</h1>

        <?php
         require_once('db_functions.php');

          // uzduotis 3.1: atspausdinti visas gydytoju pavardes naudojant FOR cikla, kaip list item "ul li"
          echo "==============  GYDYTOJU SARASAS ===========<br />";

          for ($i=1; $i < 6; $i++) {
               $gyt = getDoctor($i);
                echo "<li><a href='doctor.php?nr=$i'> " .  $gyt['name'] . "</a></li>";
          }
            ?>
    </body>
</html>
