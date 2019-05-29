
<?php
// ============svarbus patarimai===============:
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
$preke1 = [
    "antraste" => "Dviratis",
    "foto" => "1.jpg",
    "aprasymas" => "Kalnu dviratis XXL",
    "kaina" => 650,
];


// A. sukurti masyva preke2: Antraste, img pavadinimas, prekes aprasymas, kaina
$preke2 = [
    "antraste" => "Dviratis",
    "foto" => "2.jpg",
    "aprasymas" => "Kalnu dviratis MEDIUM",
    "kaina" => 400,
];
// A. sukurti masyva preke3: Antraste, img pavadinimas, prekes aprasymas, kaina
$preke3 = [
    "antraste" => "Dviratis",
    "foto" => "3.jpg",
    "aprasymas" => "Kalnu dviratis SMALL",
    "kaina" => 200
];

$foto = ["1.jpg", "2.jpg", "3.jpg"];

// print_r($preke1);
// echo "<br />";
// echo "<br />";
// var_dump($preke1);


// B. i masyva visosPrekes, ideti "preke" masyva

$visosPrekes = [$preke1, $preke2, $preke3];

// print_r($visosPrekes);

// C. atvaizduodi kiekvienoje eiluteje po 3 prekes

foreach ($visosPrekes as $preke) {
    // echo "<h2>{$preke['antraste']}</h2>";
    // arba
    echo "<h2 class=>" . $preke['antraste'] . "</h2>";
    echo "<p class=>" . $preke['aprasymas'] . "</p>";
    echo "<button class=>" . $preke['kaina'] . "</button>";
    // echo "<img src='img/$foto' alt=''  />";
    // print_r($preke);
    // echo "<br />";
}

echo "=====================<br />";
echo "<br />================";

for ($i=0; $i < count($visosPrekes); $i++) {
    echo "<h2>" . $visosPrekes[$i]['antraste'] . "</h2>";
    echo "<p class=>" . $visosPrekes[$i]['aprasymas'] . "</p>";
    echo "<img    src='./img/"     . $visosPrekes[$i]['foto'] . "' width='200px' alt=''  />";
    echo "<button class='btn-lrg'>" . $visosPrekes[$i]['kaina'] . "</button>";


}


// (naudojant for arba foreach) ir bootstrap dizaina
// D. naudojant du FOR FOR arba FOREACH FOREACH

for ($i=0; $i < count($visosPrekes) ; $i++) {

    foreach ($visosPrekes[$i] as $prekesParametras) {
        echo "<h2>" . $prekesParametras . "</h2>";
        echo "<img    src='./img/"     . $prekesParametras. "' width='200px' alt=''  />";
    }

}

// 3 budai nuotraukoms
// printf("<img    src='./img/"     . $visosPrekes[$i][1] . "' width='200px' alt=''  />");
// printf("<img src='./img/%s' width='200px' alt=''  />", $visosPrekes[$i][1]); -->


 ?>
