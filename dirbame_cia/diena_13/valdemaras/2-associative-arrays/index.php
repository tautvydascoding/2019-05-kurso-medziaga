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
        <!-- // UZDUOTIS 2 -
        // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
        // Antraste, img pavadinimas, kaina, prekes aprasymas

        // A. sukurti masyva preke1: Antraste, img pavadinimas, prekes aprasymas, kaina
        // A. sukurti masyva preke2: Antraste, img pavadinimas, prekes aprasymas, kaina
        // A. sukurti masyva preke3: Antraste, img pavadinimas, prekes aprasymas, kaina
        // B. i masyva visosPrekes, ideti "preke" masyva
        // C. atvaizduodi kiekvienoje eiluteje po 3 prekes
        // (naudojant for arba foreach) ir bootstrap dizaina
        // D. naudojant du FOR FOR arba FOREACH FOREACH


        // 3 budai nuotraukoms
        // printf("<img    src='./img/"     . $visosPrekes[$i][1] . "' width='200px' alt=''  />");
        // printf("<img src='./img/%s' width='200px' alt=''  />", $visosPrekes[$i][1]);-->
        <h1>Isijunk konsole</h1>

        <?php
        $preke1 = ["antraste" => "dviratis",
        "img" => "1.jpg",
        "prekes aprasymas" => "kalnu dviratis",
        "kaina" => 99
        ];
        $preke2 = ["antraste" => "paspirtukas",
         "img" => "2.jpg",
         "prekes aprasymas" => "elektrinis paspirtukas",
         "kaina" => 999
        ];
        $preke3 = ["antraste" => "rieduciai",
        "img" => "3.jpg",
        "prekes aprasymas" => "rieduciai su dideliais ratukais",
        "kaina" => 59
        ];

        $visosPrekes = [$preke1, $preke2, $preke3];

        // print_r($preke1);
        // echo "<br />";
        // var_dump($preke3);
        // echo "<br />";
        // echo "<br />";
        // var_dump($visosPrekes);
         ?>
<?php foreach ($visosPrekes as $preke): ?>
    <!-- <?php print_r($preke);
    echo "<br />";
     ?> -->
     <?php echo "<h2>" . $preke['antraste'] . "</h2>";
            echo "<p> {$preke['prekes aprasymas']} </p>";
            echo "<button>" . $preke['kaina'] . "</button>";

     ?>
<?php endforeach;
echo "<br />------------------------------------";
?>

<?php
for ($i=0; $i < count($visosPrekes); $i++) {
    echo "<h2>" .$visosPrekes[$i]['antraste']. "</h2>";
    echo "<p>" .$visosPrekes[$i]['prekes aprasymas']. "</p>";
    echo "<button>" .$visosPrekes[$i]['kaina']. "</button>";
}
echo "<br />----------------------------------------";

for ($i=0; $i < count($visosPrekes) ; $i++) {
    foreach ($visosPrekes[$i] as $prekesParametras) {
        echo "<h2>" . $prekesParametras . "</h2>";
    }
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
