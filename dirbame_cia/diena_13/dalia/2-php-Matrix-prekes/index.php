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


        <!-- // UZDUOTIS 2
        // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
        // Antraste, img pavadinimas, kaina, prekes aprasymas

        // A. sukurti masyva preke1: Antraste, img pavadinimas, prekes aprasymas, kaina
        // A. sukurti masyva preke2: Antraste, img pavadinimas, prekes aprasymas, kaina
        // A. sukurti masyva preke3: Antraste, img pavadinimas, prekes aprasymas, kaina
        // B. i masyva visosPrekes, ideti "preke" masyva
        // C. atvaizduodi kiekvienoje eiluteje po 3 prekes
        // (naudojant for arba foreach) ir bootstrap dizaina
        // D. naudojant du FOR FOR arba FOREACH FOREACH -->

        <?php
        $preke1 = [
        "antraste" => "Dviratis",
        "foto" => "1.jpg",
        "aprasymas" => "Kalnu dviratis XXL",
        "kaina" => 650
        ]
        //print_r( $preke1 ); //testuoju
        //print ( aaa ); //funkcija

        $preke1 = [
        "antraste" => "Dviratis",
        "foto" => "1.jpg",
        "aprasymas" => "Kalnu dviratis XXL",
        "kaina" => 650
        ]

        $preke2 = [
        "antraste" => "Paspirtukas",
        "foto" => "2.jpg",
        "aprasymas" => "Mazas rozinis paspirtukas",
        "kaina" => 50
        ]

        $preke3 = [
        "antraste" => "Rieduciai",
        "foto" => "3.jpg",
        "aprasymas" => "Moteriski rieduciai",
        "kaina" => 250
        ]


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
