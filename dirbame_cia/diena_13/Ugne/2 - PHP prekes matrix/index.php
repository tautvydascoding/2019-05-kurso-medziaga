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

        <h1>PHP Matrix prekes</h1>




        <!-- // ============svarbus patarimai===============:
        // ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
        // FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
        // matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
        // matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
        // matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
        // matricos ilgis daznai skiriasi nuo plocio.
        //  pvz.:
         // for ( i < eiluciuSkaicius)
         //    for ( k < stulpeliuSkaicius)
         // =================// =================// ========


        // UZDUOTIS 2
        // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
        // Antraste, img pavadinimas, kaina, prekes aprasymas

        // A. sukurti masyva preke1: Antraste, img pavadinimas, prekes aprasymas, kaina
        // A. sukurti masyva preke2: Antraste, img pavadinimas, prekes aprasymas, kaina
        // A. sukurti masyva preke3: Antraste, img pavadinimas, prekes aprasymas, kaina -->
        <?php
        $br = "<br>";

        $preke1 = [
        "antraste" => "Dviratis",
        'foto' => "1.jpg",
        'pavadinimas' => 'Ruzavoji pantera',
        'kaina' => 300
       ];

       $preke2 = [
       'antraste' => 'Kompiuteris',
       'foto' => '2.jpg',
       'pavadinimas' => 'Pieninis smegenas',
       'kaina' => '900 Eur'
      ];

      $preke3 = [
      'antraste' => 'Akiniai',
      'foto' => '3.jpg',
      'pavadinimas' => 'Kristalinis vaizdas',
      'kaina' => '30 Eur'
     ];

     $visosPrekes = [$preke1, $preke2, $preke3];

for ($i=0; $i<4; $i++){
  echo "<div class='row'>";
    foreach ($visosPrekes as $preke) {
      echo "<div class='col-4 card text-center'><h2>" . $preke['antraste'] . "</h2>";
      echo "<p>" . $preke['pavadinimas'] . "</p>";
      echo "<img    src='./img/" . $preke['foto'] . "'  height='200' alt=''  />";
      echo "<button class='btn btn-outline-secondary'>" . $preke['antraste'] . "</button></div>";
    }
    echo "</div>";
  }

  // for($i=0; $i<count($visosPrekes); $i++){
  //   echo "<h2>" . $visosPrekes[$i]['antraste'] . "</h2>";
  // }


        ?>



        <!-- // B. i masyva visosPrekes, ideti "preke" masyva
        // C. atvaizduodi kiekvienoje eiluteje po 3 prekes
        // (naudojant for arba foreach) ir bootstrap dizaina
        // D. naudojant du FOR FOR arba FOREACH FOREACH


        // 3 budai nuotraukoms
        // printf("<img    src='./img/"     . $visosPrekes[$i][1] . "' width='200px' alt=''  />");
        // printf("<img src='./img/%s' width='200px' alt=''  />", $visosPrekes[$i][1]); -->






        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <!-- <script type="text/javascript" src="js/main.min.js">     </script> -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>
