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

        <?php
// UZDUOTIS 2 --------------
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas

// A. sukurti masyva preke1: Antraste, img pavadinimas, prekes aprasymas, kaina
$preke1 = [
            "antraste" => "Dviratis",
            "foto" => "1.jpg",
            "aprasymas" => "Kalnu dviratis XXL",
            "kaina" => 650
        ];
$preke2 = [
            "antraste" => "Riedlente",
            "foto" => "2.jpg",
            "aprasymas" => "Longboard su 80mm ratukai",
            "kaina" => 140
        ];
$preke3 = [
            "antraste" => "Papirkutas",
            "foto" => "3.jpg",
            "aprasymas" => "Paprastas 125mm ratukai",
            "kaina" => 60
        ];
// print_r( $preke1 ); // testuoju
// echo "<br />";
// echo "<br />";
// var_dump($preke1);

// print_r( $visosPrekes ); // testuoju

// A. sukurti masyva preke2: Antraste, img pavadinimas, prekes aprasymas, kaina
// A. sukurti masyva preke3: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
$visosPrekes = [$preke1, $preke2, $preke3];
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes
foreach ($visosPrekes as  $preke) {
    // echo "<h2>  {$preke['antraste']} </h2>";
    // arba
    echo "<h2>" . $preke['antraste'] . "</h2>";
    echo "<p>"  . $preke['aprasymas'] . "</p>";
    echo "<button>" . $preke['kaina'] . "</button>";
}
echo "=================<br />";
for ($i=0; $i < count($visosPrekes); $i++) {
    echo "<h2>" . $visosPrekes[$i]['antraste'] . "</h2>";
    echo "<p>" . $visosPrekes[$i]['aprasymas'] . "</p>";
    echo "<button>" . $visosPrekes[$i]['kaina'] . "</button>";
}
echo "=================<br />";
echo "=================<br />";
for ($i=0; $i < count($visosPrekes) ; $i++) {
    foreach ($visosPrekes[$i] as $prekesParametras) {
        echo "<h2>". $prekesParametras ."</h2>";
    }
}

// (naudojant for arba foreach) ir bootstrap dizaina
// D. naudojant du FOR FOR arba FOREACH FOREACH

        // echo "aaa";
        // print( "aaaa"); // f-ja
        // print_r( $manoMasyvas );  // isveda visa masyva
        // var_dump( $manoKintamasis ); // isveda daugiau duomenu apie kint

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
