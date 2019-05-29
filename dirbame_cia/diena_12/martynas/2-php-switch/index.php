<?php


$vartotojoTipas = "admin"; //moderatorius subscriber

switch ($vartotojoTipas) {
    case 'admin':
        echo "Labas Admine";
        echo "tu cia Vadas";
        break;

    case 'moderator':
        echo "Labas moderatoriau";
        echo "tu cia neVadas";
        break;

    case 'subscriber':
        echo "Labas subscriber";
        echo "tu musu klausysi";
        break;

    default:
        echo "labas hackeri";
        break;
}





// PASIZIURETI KAS YRA PHP, js "Switch"



  // UZDUOTIS  "Switch"
 // paduoti varda ir Jeigu jis lygus:
 // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
 // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
 // "opel" - atspausdinti "Susimastykite apie naujus priedus"

echo "</br> ----------------Kita uzduotis--------------------- </br> ";


$autoMarke =" Audi ";
$autoMarke = mb_strtolower($autoMarke); //UTF-8 lietuviu kalbos koduote
$autoMarke = trim($autoMarke);

switch ($autoMarke) {
    case 'audi':
        echo "AUDI!";
        echo "Susimastykite apie variklio prieziura";
        break;

    case 'bmw':
        echo "BMW!";
        echo "Susimastykite apie greiti ir vairavimo kultura";
        break;

    case 'opel':
        echo "OPEL!";
        echo "Susimastykite apie naujus priedus";
        break;

    default:
        echo "vaziuok su dviraciu,mylek gamta";
        break;
}





 ?>
