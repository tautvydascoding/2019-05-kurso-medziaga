<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<div><h1> Visi gydytojai </h1>";

        include('db_functions.php');
        $visiGydytojai = getDoctors(11);
        $vienasgydytojas = mysqli_fetch_assoc($visiGydytojai);

        while ( $vienasgydytojas ) {
          echo " <h2>"  . $vienasgydytojas['name'] .' '. $vienasgydytojas['lname'] . "</h2>";
        $vienasgydytojas = mysqli_fetch_assoc($visiGydytojai); // mysqli_fetch_assoc - paima sekanti gydytoja is mysql objekto IR sudajo jo stulpelius i ARRAY
         }
         echo "</div>";
            ?>
    </body>
</html>
