<?php

$vartojoTipas = "admin"; // moderator subscriber
switch ($vartojoTipas) {
  case 'admin':
      echo "labas Admin!";
      echo "tu cia vadas";
      break;
    case 'moderator':
        echo "labas moderator!";
        echo "tu visiems padesi";
        break;
    case 'subscriber':
        echo "labas vartotojau ka snd parasysi!";
        break;

    default:
        echo "labas hacker'i";
        break;
}

echo "<br />";
echo "<br />";
echo "<br />";


$automobilis = "AUdi kieta";
$automobilis = mb_strtolower($automobilis, 'UTF-8');
$automobilis = trim( $automobilis); // pasalinam tarpus ir tabus
switch ($automobilis) {
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
  echo "tokio modelio netaisome";
    // code...
    break;
}
 ?>
