<?php

// $vartotojoTipas = 'admin';
// switch ($vartotojoTipas) {
//   case 'admin':
//   echo "labas Admin!";
//   echo "tu cia vadas!";
//     break;
//   case 'moderator':
// echo "labas moderator";
// echo "ltu visiems padesi";
//     break;
//     case 'subscriber':
//   echo "labas vartotojau";
//       break;
//   default:
// echo "sveikad hacker, ka tiu?";
//     break;
    $automobilis = "aaa";
    $automobilis = mb_strtolower ($automobilis, 'UTF-8');//keicia mazasias i didziasias raides ir atvirksciai
    $automobilis = trim ($automobilis); //pasalina tarpus ivedimo laukuose, pvz., suvedant user name ar pan.
    switch ($automobilis) {
      case 'audi':
      echo "Susimastykite apie variklio prieziura";
        break;
      case 'bmw':
      echo "Susimastykite apie greiti ir vairavimo kultura";
        break;
        case 'opel':
          echo "Susimastykite apie naujus priedu";
          break;
      default:
        echo "A koks cia automobilis?";
        break;
    }




 // PASIZIURETI KAS YRA PHP, js "Switch"



   // UZDUOTIS  "Switch"
  // paduoti varda ir Jeigu jis lygus:
  // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
  // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
  // "opel" - atspausdinti "Susimastykite apie naujus priedus"
?>
