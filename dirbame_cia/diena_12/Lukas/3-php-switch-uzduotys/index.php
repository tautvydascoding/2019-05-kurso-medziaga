<?php
// PASIZIURETI KAS YRA PHP, js "Switch"



  // UZDUOTIS  "Switch"
 // paduoti varda ir Jeigu jis lygus:
 // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
 // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
 // "opel" - atspausdinti "Susimastykite apie naujus priedus"
$vardas = "AUdi";
$vardas = mb_strtolower($vardas);
$automobilis = trim($automobilis);
switch ($vardas) {
    case 'audi':
        echo "Susimastykite apie variklio prieziura";
        break;
    case 'bmw':
        echo "Susimastykite apie greiti ir vairavimo kultura";
        break;
    case 'opel':
        // code...
        break;
        echo "Susimastykite apie naujus priedus";
    default:
        echo "pirk golfa.";
        break;
}
 ?>
