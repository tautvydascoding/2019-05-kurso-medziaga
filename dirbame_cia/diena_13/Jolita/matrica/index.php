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

        <h1>php spausdinti</h1>

        <?php

        $preke1 = ["Antraste"=>"Sijonas", "foto"=>"1.jpg", "prekes aprasymas"=>"Nuostabus, grazus, pigus", "kaina"=>120];
        $preke2 = ["Antraste"=>"Kelnes", "foto"=>"2.jpg", "prekes aprasymas"=>"Trumpos, ilgos, dryzuotos", "kaina"=>50];
        $preke3 = ["Antraste"=>"Kojine", "foto"=>"3.jpg", "prekes aprasymas"=>"taskuotos", "kaina"=>10];

        // var_dump($preke1);
        // echo "<br />";
        // print_r($preke3);
        // echo "<br />";
        // print_r($preke2);

        $visosPrekes = [$preke1, $preke2, $preke3];

print_r($visosPrekes);
foreach ($visosPrekes as $konkretiPreke) {
    // echo "<br />";
    // print_r($konkretiPreke); pasitikrinome
    // echo "<br />";
echo "<h2>".$konkretiPreke['Antraste']."</h2>";
echo "<p>".$konkretiPreke['prekes aprasymas']."</p>";
echo "<button>".$konkretiPreke['kaina']."</button>";

}
echo "======================================";
for ($i=0; $i < count($visosPrekes) ; $i++) {
    echo "<h2>".$visosPrekes[$i]['Antraste']."</h2>";
    echo "<p>".$visosPrekes[$i]['prekes aprasymas']."</p>";
    echo "<button>".$visosPrekes[$i]['kaina']."</button>";
    // code...
}
echo "======================================";
for ($i=0; $i < count($visosPrekes); $i++) {
    foreach ($visosPrekes[$i] as $prkesparametras) {
        echo "<h2>".$prkesparametras . "</h2>";
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
