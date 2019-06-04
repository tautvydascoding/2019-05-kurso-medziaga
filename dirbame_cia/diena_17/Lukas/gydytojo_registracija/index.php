<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>

        <form class="" action="registracija.php" method="get">
            <input type="text" name="vardas" value="" placeholder="Gydytojo vardas">
            <input type="text" name="pavarde" value="" placeholder="Gydytojo pavardė">
            <button class = "btn-primary" type="submit" name="button">Registruotis</button>
        </form>
        <?php
        include("db_functions.php");
        $nr = 32;
        $gydytojaiOBJ = getDoctors($nr);
        $vienasGydArray = mysqli_fetch_assoc($gydytojaiOBJ); // paima pirma elementa is objekto ir pavercia masyvu
        if (mysqli_num_rows($gydytojaiOBJ) > 0) {
            // mysqli_fetch_assoc - paima viena eilue is OBJ ir pavercia i array
            while ($vienasGydArray == true) {

                echo "<h2>Gydytojas: " . "<a href='doctor.php?nr=" . $vienasGydArray['id']  . "'>" . $vienasGydArray['name'] . " " . $vienasGydArray['lname'] . "</a> <a href='doctor?nr=" . $vienasGydArray['id'] .  "'></h2>";
                $vienasGydArray = mysqli_fetch_assoc($gydytojaiOBJ);     // mysqli_fetch_assoc - paima viena (SEKANCIA) eilue is OBJ ir pavercia i array
            }
        } else {
            // echo "NEI NIEVO GYDYTOJO NERADOME <br />";
        }
        ?>





        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <!-- <script type="text/javascript" src="js/main.min.js">     </script> -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>
