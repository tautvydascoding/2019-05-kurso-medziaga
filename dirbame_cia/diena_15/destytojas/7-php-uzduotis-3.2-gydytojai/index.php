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



            <a href="doctor.php?id=3"> Kaip kloti plyteles</a>
            <a href="doctor.php?id=16"> Kaip maisyti cementa</a>
            <a href="doctor.php?id=17"> Kaip glaistuoti sienas</a>
            <a href="doctor.php?id=20"> Kaip griauti siena</a>
    </body>
</html>
