<?php
$br = "<br>";
// PASIZIURETI KAS YRA PHP, js "Switch"

  // UZDUOTIS  "Switch"
 // paduoti varda ir Jeigu jis lygus:
 // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
 // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
 // "opel" - atspausdinti "Susimastykite apie naujus priedus"

 $vartotojoTipas = "kikas";
 switch ($vartotojoTipas) {
   case "admin":
     echo "Sveiki atvykę, administratoriau $br";
     echo "opapap";
     break;

   case "ugne":
     echo "Labutukas Ugne! $br";
     echo "Oleee";
     break;

   default:
     echo "Labutusiukas $vartotojoTipas";
     break;
 }

echo $br . "______________SWITCH UZDUOTIS____________" . $br . $br;

$vardas = "ugne";
switch ($vardas) {
  case "audi":
    echo "Susimastykite apie variklio prieziura";
    break;

  case "BMW":
    echo "Susimastykite apie greiti ir vairavimo kultura";
    break;

    case "opel":
      echo "Susimastykite apie naujus priedus";
      break;

  default:
    echo "Nerandame $vardas markės automobilio!";
    break;
}

 ?>
