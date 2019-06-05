<?php



        include('db_functions.php');
        $visiGydytojai = getDoctors(20);
        $vienasgydytojas = mysqli_fetch_assoc($visiGydytojai);

        while ( $vienasgydytojas ) {
          echo " <h2>"  . $vienasgydytojas['name'] .' '. $vienasgydytojas['lname'] . "</h2>";
          echo "<a href='deleteDoctor.php?nr={$vienasgydytojas['id']}'> ";
          echo "<button type='submit' name='button'>trinti</button></a>";
        $vienasgydytojas = mysqli_fetch_assoc($visiGydytojai); // mysqli_fetch_assoc - paima sekanti gydytoja is mysql objekto IR sudajo jo stulpelius i ARRAY
         }

?>
