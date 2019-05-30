<?php


$vartotojoTipas = "moderatorius"; //moderator, ...

switch ($vartotojoTipas) {
    case 'admin':
        // code...
        echo "labas biciuli";
        echo "tu cia vadas";
        break;
        case 'moderatorius':
            // code...
            echo "labas, ka tu";
                        break;
    default:
        echo "labas lukai";

        break;
}

// PASIZIURETI KAS YRA PHP, js "Switch"
  // UZDUOTIS  "Switch"
 // paduoti varda ir Jeigu jis lygus:
 // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
 // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
 // "opel" - atspausdinti "Susimastykite apie naujus priedus"
$automodel = "Bmw "; //BMW, opel
$automodel = mb_strtolower($automodel, 'UTF-8');
$automodel = trim($automodel);
switch ($automodel) {
    case 'audi':
        echo "Susimastykite apie variklio prieziura";
        break;
    case 'bmw':
        echo "Susimastykite apie greiti ir vairavimo kultura";
        break;
    case 'opel':
        echo "Susimastykite apie naujus priedus";
        break;

    default:
        echo "tai ka tu vairuoji?";
        break;
}
 ?>
