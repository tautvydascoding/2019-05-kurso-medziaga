<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- !!! mano CSS failas vissada zemiau, nie kiti css failai -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

        <!-- !!idedame CSS faila, nes kitaip neveiks -->
        <link rel="stylesheet" href="css/main.css">
        <!-- NOTE: jeigu neveikia:
            1) ar failo pavadinimas geras
            2) ar kelias geras?   (ar "/" teisingi; direktorija ar gere )
            3) ar   rel="stylesheet"
            4) ar link uzdalete ">"
         -->
    </head>
    <body>

        <h1>Isijunk konsole</h1>
        <!-- // uzduotis 2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra 4
        // uzduotis 3.1: atspausdinti visas gydytoju pavardes naudojant FOR cikla, kaip list item "ul li"
        // uzduotis 3.2: patobulinti 'uzduotis3',
            kad paspaudus ant gydytojo pavardes   atidarytu doctor.php faila
            HINT: '<a href=""></a>' nuorodoje,
        // uzduotis 3.3:
                doctor.php faile isvesti info apie - paspausta gydytoja:
                vardas pavarde numeris

            HINT: 'a' nuorodoje, prideti '?kintamasis=...'   ir doctor.php faile su $_GET pasiimti kintamaji -->
            <?php
            require_once('db_functions.php');
            // getDoctor(4);
            // $doc = (getDoctor(4));
            ?>
            <!-- <p> <?php echo $doc['name']." ". $doc['lname']?> </p> -->

            <?php
            echo "------------------visos pavarde---------------<br />";
            echo "<ul>";
            for ($i=1; $i < 6; $i++) :
                $doc = (getDoctor($i));
                echo "<li><a href='doctor.php?nr=$i'>". $doc['lname']. "</a></li>";
            endfor;
            echo "</ul>";
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
