<?php

$vartotojoTipas = "admin"; //moderator subscriber
switch ($vartotojoTipas) {
    case 'admin':
        echo "Labas biciuli!";
        echo "tu cia vadas";
        break;
    case 'moderator':
        echo "labas moderatoriau";
        break;
    case 'subscriber':
        echo "labas vartotojau";
        break;
    default:
        echo "labas hacker`i";
        break;
}

$automarke = "BMW";
switch ($automarke) {
    case 'audi':
        echo "Susimastykite apie variklio prieziura";
        break;
    case 'BMW':
        echo "Susimastykite apie greiti ir vairavimo kultura";
        break;
    case 'opel':
        echo "Susimastykite apie naujus priedus";
        break;
    default:
        echo "tokio modelio nera";
        break;
}

 ?>
