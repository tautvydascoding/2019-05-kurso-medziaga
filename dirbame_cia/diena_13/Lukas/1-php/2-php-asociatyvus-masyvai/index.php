<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <?php
        $preke1 = [
            "antraste" => "Dviratis",
            "foto" => "1.jpg",
            "prekes aprasymas" => "raudonas 25' labai kietas", "kaina" => 699.99];
        $preke2 = [
            "antraste" => "Paspirtukas",
            "foto" => "2.jpg",
            "prekes aprasymas" => "raudonas 25' labai kietas", "kaina" => 199.99];
        $preke3 = [
            "antraste" => "Motoroleris",
            "foto" => "3.jpg",
            "prekes aprasymas" => "raudonas 25' labai kietas", "kaina" => 1699.99];



        $visosPrekes = [$preke1, $preke2, $preke3];
        //
        // foreach ($visosPrekes as $key => $value) {
        //     echo $value["antraste"];
        //     echo "<br />";
        //     printf ("<img src='img/" . $value['foto'] . "' width='200px' alt='' />");
        //     echo "<br />";
        //     echo $value["prekes aprasymas"];
        //     echo "<br />";
        //     echo $value["kaina"];
        //     echo "<br />";
        //     echo "<br />";
        // }
    ?>

         <?php

            foreach ($visosPrekes as $value) {
                foreach ($value as $key => $value1) {
                    echo "<h2>" . $value1 . "</h2>";
                    echo "<br />";

                }
            }

         ?>
==========================================
        <?php
        for ($i=0; $i < count($visosPrekes); $i++) {

                echo "<h2>" . $visosPrekes[$i]['antraste'] . "</h2>";
                echo "<br />";
                echo "<h2>" . $visosPrekes[$i]['prekes aprasymas'] . "</h2>";
                echo "<br />";
                echo "<h2>" . $visosPrekes[$i]['kaina'] . "</h2>";
                echo "<br />";


        }


         ?>
============================================
<?php
for ($i=0; $i < count($visosPrekes); $i++) {

        foreach ($visosPrekes[$i] as $key => $value) {
            echo "<br />";
            echo $value;

        }


}


 ?>



        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>
